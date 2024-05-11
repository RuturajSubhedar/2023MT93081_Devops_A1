pipeline {
    agent any
    
    stages {
        stage('Checkout') {
            steps {
                // Checkout code from GitHub repository
                git branch: 'master', credentialsId: 'your-credentials-id', url: 'https://github.com/RuturajSubhedar/2023MT93081_Devops_A1.git'
            }
        }
        stage('Build and Compile') {
            steps {
                // Use Maven to build and compile the project
                bat 'mvn clean compile'
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
                // Replace 'your-azure-artifact' with your actual Azure Artifact details
                // This step is just a placeholder, replace it with your actual upload steps
                echo 'Uploading artifacts to Azure Artifact...'
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
