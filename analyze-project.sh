#!/bin/bash

# This script is used to analyze the project with SonarQube.

# First pull the latest project
git pull origin main

# Check if the .env file exists
if [ -f .env ]; then
    # Load the environment variables from .env
    . .env
    echo "Success Load .env file"
    echo "Environment variables loaded from .env file."
else
    echo ".env file not found."
fi

# variable for sonarqube
SERVER_SONARQUBE=${SONARQUBE_IP}:${SONARQUBE_PORT}
SERVER_SONAR_TOKEN=${SONARQUBE_TOKEN}
SERVER_SONAR_PROJECT_KEY=${SONARQUBE_PROJECT_KEY}

echo "Start SonarQube analysis"
# Command Linux (UBUNTU)
# sonar-scanner \
#   -Dsonar.projectKey=${SERVER_SONAR_PROJECT_KEY} \
#   -Dsonar.sources=. \
#   -Dsonar.host.url=http://${SERVER_SONARQUBE} \
#   -Dsonar.token=${SERVER_SONAR_TOKEN}

# Command Windows
sonar-scanner.bat -D"sonar.projectKey=${SERVER_SONAR_PROJECT_KEY}" -D"sonar.sources=." -D"sonar.host.url=http://${SERVER_SONARQUBE}" -D"sonar.token=${SERVER_SONAR_TOKEN}"
