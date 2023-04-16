pipeline { 
    agent any

    stages {
        stage('Prepare') {
            steps {
                sh 'composer install --ignore-platform-reqs'
                sh 'bundle install --path ~/.gem'
                sh 'rm -rf build/logs'
                sh 'mkdir -p build/logs'
            }
        }
        stage('PHP Syntax check') {
            steps {
                notifyBuild('STARTED')
                sh 'php -l app/code/Shero'
            }
        }
        stage('PHP Code Sniffer') {
            steps {
                sh 'vendor/bin/phpcs --report=checkstyle --report-file=`pwd`/build/logs/checkstyle.xml --standard=PSR2 --extensions=php --ignore=autoload.php --ignore=vendor/ app/code/Shero || exit 0'
                checkstyle pattern: 'build/logs/checkstyle.xml'
            }
        }
        stage('PHPStan') {
            steps {
                sh 'php /var/lib/jenkins/.composer/vendor/bin/phpstan analyse app/code/Shero --autoload-file app/bootstrap.php -c phpstan.neon --error-format=table || exit 0'
            }
        }
        stage('Copy paste detection') {
            steps {
                sh 'vendor/bin/phpcpd --log-pmd build/logs/pmd-cpd.xml --exclude vendor app/code/Shero || exit 0'
                dry canRunOnFailed: true, pattern: 'build/logs/pmd-cpd.xml'
            }
        }
        stage('Deploy') {
            when {
                expression {
                    currentBuild.result == null || currentBuild.result == 'SUCCESS' || printenv == 'develop' || env.BRANCH_NAME == 'develop'
                }
            }
            steps {
                echo "Deploying"
                echo env.BRANCH_NAME
                sshagent(['GlobalJenkins']) {
                    sh('bundle exec cap qa deploy')
                }
            }
        }
    }

    post {
        always {
            notifyBuild("SUCCESSFUL")
        }
    }
}

def notifyBuild(String buildStatus = 'STARTED') {
    // build status of null means successful
    buildStatus =  buildStatus ?: 'SUCCESSFUL'

    // Default values
    def colorName = 'RED'
    def colorCode = '#FF0000'
    def subject = "${buildStatus}: Job '${env.JOB_NAME} [${env.BUILD_NUMBER}]'"
    def summary = "${subject} (${env.BUILD_URL})"

    // Override default values based on build status
    if (buildStatus == 'STARTED') {
    color = 'YELLOW'
    colorCode = '#FFFF00'
    } else if (buildStatus == 'SUCCESSFUL') {
    color = 'GREEN'
    colorCode = '#00FF00'
    } else {
    color = 'RED'
    colorCode = '#FF0000'
    }

    // Send notifications
    slackSend (color: colorCode, message: summary)
}