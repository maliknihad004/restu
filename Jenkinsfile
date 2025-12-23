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

        stage('Deploy') {
            steps {
                sh '''
                docker compose down || true
                docker compose build --no-cache
                docker compose up -d
                '''
            }
        }
    }
}
