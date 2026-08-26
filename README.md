# DevOps Project

A **LAMP stack** web application with an automated CI/CD pipeline using **GitHub, Jenkins, Docker, and Docker Compose**.

## 🛠️ Technologies

* **Linux** — Operating system
* **Apache** — Web server
* **MySQL** — Database
* **PHP** — Backend
* **Docker & Docker Compose** — Containerization
* **Jenkins** — CI/CD
* **Git & GitHub** — Version control

## 🔄 CI/CD Workflow

```text
GitHub → Jenkins → Docker Build → Docker Compose → Deployment
```

Jenkins automatically builds and deploys the application when changes are pushed to GitHub.

## 🏗️ Architecture

```text
                GitHub
                   │
                Webhook
                   ↓
               Jenkins
                   │
                   ↓
          Docker Compose
            ┌──────┴──────┐
            ↓             ↓
         Apache          MySQL
          + PHP
            │
            ↓
        LAMP Website
```

## 📁 Structure

```text
├── database/           # MySQL configuration
├── site/               # PHP website
├── Dockerfile
├── docker-compose.yml
├── Jenkinsfile
├── upload.sh
└── pull.sh
```

## 🎯 Purpose

This project demonstrates practical experience with **containerization, CI/CD automation, Linux, and deployment of a LAMP stack application**.
