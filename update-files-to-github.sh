#!/bin/bash

#############################################################################
# This script updates Q2A Finnish translations from Transifex to given  
# Github repository. Normally this script is run periodially with crontab 
#
#############################################################################
# dependencies:
# 1. Transifex client (http://docs.transifex.com/developer/client/)
# 2. Git client (http://git-scm.com/book/en/Getting-Started-Installing-Git)
#############################################################################
# We assume that first pull of translation repo has been executed and 
# you have local copy of the repository in your hard drive.
#
# We also assume that you have ssl keys working so that pushing to github does
# not require password authentication.
#   
# The address of github translation repository
GITHUBREPO="git@github.com:markosu/q2a-suomikaannos.git"
# local path of the repository folder, if does not exist -> exit
LOCALPATH="/home/kyyberi/Github"
REPOFOLDER="q2a-suomikaannos"

echo "1/6 Updating local repository from Github"
cd $LOCALPATH

if [ -d $REPOFOLDER/.git ]; then
	echo "Existing local repo FOUND, updating..."
	cd $REPOFOLDER
	git pull
	echo "Done with update"
else
	echo "Local repository not found, cloning repository..."
	git clone $GITHUBREPO
	echo "Done cloning"
fi;

echo "2/6 Done with local repository update"

echo "3/6 Pulling new translations from Transifex"

echo "4/6 Done with Transifex"

echo "5/6 Pushing changes to Github"

echo "6/6 Done with Github repository update"
