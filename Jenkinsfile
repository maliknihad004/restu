pipeline {
    agent any

    environment {
        REPO_URL = 'https://github.com/maliknihad004/restu.git'
        DOCKER_BUILDKIT = '1'
    }

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: env.REPO_URL
            }
        }

        stage('Build') {
            steps {
                sh 'docker compose build --no-cache'
            }
        }

        stage('Deploy') {
            steps {
                sh 'docker compose up -d'
            }
        }
    }
}