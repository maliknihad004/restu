#!/bin/bash
read -p "Enter commit message: " message
read -p "Enter branch to push to: " branch
git add .
git commit -m "$message"
git push origin "$branch"
echo "Code uploaded successfully to branch '$branch'!"
