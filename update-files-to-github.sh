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
#
# We assume that you have ssl keys working so that pushing to github does
# not require password authentication.
#   
# The address of github translation repository:
GITHUBREPO="git@github.com:markosu/q2a-suomikaannos.git"
# local path of the repository folder, if does not exist -> exit
LOCALPATH="/home/kyyberi/Github"
REPOFOLDER="q2a-suomikaannos"

echo "1/3 Updating local repository from Github"
cd $LOCALPATH

if [ -d $REPOFOLDER/.git ]; then
	echo "Existing local repo FOUND, updating..."
	cd $REPOFOLDER
	git pull
else
	echo "Local repository not found, cloning repository..."
	git clone $GITHUBREPO

fi;

echo "Done with local repository update from Github"

echo "2/3 Pulling new translations from Transifex"

echo "Done with Transifex"

echo "3/3 Pushing changes to Github"

echo "Done with Github repository update"
