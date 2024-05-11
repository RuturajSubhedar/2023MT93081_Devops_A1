pipeline {
    agent any
    
    stages {
        stage('Checkout SCM') {
            steps {
                // Checkout code from GitHub repository
                checkout([$class: 'GitSCM',
                          branches: [[name: '*/master']],
                          userRemoteConfigs: [[url: 'https://github.com/RuturajSubhedar/2023MT93081_Devops_A1.git']]])
            }
        }
        stage('Initialize') {
            steps {
                // Perform any necessary initialization steps here
                sh 'echo "Initialization step"'
            }
        }
        stage('Build & Publish') {
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
        stage('Upload to Azure Artifact') {
            steps {
                // Add steps to upload artifacts to Azure Artifact
                sh 'echo "Upload to Azure Artifact"'
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
