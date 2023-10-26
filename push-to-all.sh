#!/bin/bash

# get remotes from git
# shellcheck disable=SC2207
declare -a remotes=($(git remote))

# Define your remotes here
#declare -a remotes=("github-martin-schenk.es" "server22-prod" "bitbucket-mank-legal")

# Function to output text in green
echo_green() {
    echo -e "\033[0;32m$1\033[0m"
}

# Function to output text in red
echo_red() {
    echo -e "\033[0;31m$1\033[0m"
}

# Function to output text in yellow
echo_yellow() {
    echo -e "\033[1;33m$1\033[0m"
}

# Function to show files that will be pushed and explain system messages
show_changes() {
    local REMOTE=$1  # Pass in the remote name as an argument
    echo_yellow "Fetching changed files for $REMOTE..."
    git fetch $REMOTE  # Update local knowledge of the remote
    CHANGED_FILES=$(git diff --name-only $REMOTE/main...main)
    if [ -z "$CHANGED_FILES" ]; then
        echo_yellow "No files will be pushed to $REMOTE."
    else
        echo_green "Files that will be pushed to $REMOTE:"
        echo -e "\033[0;34m$CHANGED_FILES\033[0m"
    fi
}

# Loop through each remote and push
for remote in "${remotes[@]}"; do
    show_changes $remote
    if git push $remote main; then
        echo_green "Successfully pushed to $remote."
    else
        echo_red "Failed to push to $remote."
    fi
done
