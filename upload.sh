#!/bin/bash
read -p "Enter a commit message: " message
git add .
git commit -m "$message"
git push origin main
echo "Code Uploaded Successfully!"
