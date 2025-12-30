#!/bin/bash
read -p "Enter branch to pull from: " branch
git pull origin "$branch"
echo "Latest code downloaded from '$branch'!"
