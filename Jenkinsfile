pipeline {
    agent any
    
    stages {
        stage('Checkout') {
            steps {
                // Checkout code from GitHub repository
                checkout([$class: 'GitSCM',
                          branches: [[name: '*/master']],
                          userRemoteConfigs: [[url: 'https://github.com/RuturajSubhedar/2023MT93081_Devops_A1.git']]])
            }
        }
        stage('Build and Compile') {
            steps {
                // Use Maven to build and compile the project
                sh 'mvn clean compile'
            }
            
            post {
                success {
                    // If build succeeds, archive the build artifacts
                    archiveArtifacts artifacts: '**/target/*.jar', allowEmptyArchive: true
                }
                
                failure {
                    // If build fails, send a notification or take other actions
                    echo 'Build failed! Please check the build logs.'
                }
            }
        }
    }
    
    post {
        always {
            // Clean up workspace after the build is complete
            cleanWs()
        }
    }
}
