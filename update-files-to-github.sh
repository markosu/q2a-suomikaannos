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
# We assume that you have already initiated transifex in your computer
# after installing the client and issue command "tx init" 
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
	rm -rf ./*.php
	rm -rf ./readme*
	rm -rf ./update.log
	# Hmm....what if merge is needed? Could we just force an overwrite 
	# from Github repository? Something like
	# git reset --hard HEAD
	# git clean -f -d
	# The above will remove .tx folder as well
	git pull
else
	echo "Local repository not found, cloning repository..."
	git clone $GITHUBREPO

fi;

echo "Done with local repository update from Github"
echo "---------------------------------------------"
echo "2/3 Pulling new translations from Transifex"
tx pull -a

echo "Done with Transifex"
echo "--------------------"
echo "3/3 Pushing changes to Github"
now=$(date)
echo "last update: $now" >> update.log

git add -A
git commit -m "Kyyberi's desktop updating translation files"
git push -u origin master
echo "Done with Github repository update"
echo "----------------------------------"
