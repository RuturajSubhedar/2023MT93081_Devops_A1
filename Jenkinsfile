pipeline {
    agent any
    
    stages {
        stage('Declarative: Checkout SCM') {
            steps {
                checkout([$class: 'GitSCM', 
                    branches: [[name: 'master']], 
                    doGenerateSubmoduleConfigurations: false, 
                    extensions: [], 
                    submoduleCfg: [], 
                    userRemoteConfigs: [[url: 'https://github.com/RuturajSubhedar/2023MT93081_Devops_A1.git']]
                ])
            }
        }
        
        stage('Initialize') {
            steps {
                echo 'Initializing...'
                // Add any initialization steps here
            }
        }
        
        stage('Build & Publish') {
            steps {
                echo 'Building...'
                // Add build steps here
                
                echo 'Publishing...'
                // Add publish steps here
            }
        }
        
        stage('Upload to Azure Artifact') {
            steps {
                echo 'Uploading to Azure Artifact...'
                // Add steps to upload artifacts to Azure here
            }
        }
    }
    
    post {
        always {
            echo 'Cleaning up...'
            // Add any cleanup steps here
        }
    }
}
