cls
goto init_log_command:
git init
git status
edit 1.txt
git status
git add .
git status
git commit -m "Add many files"
git log 
git log --help
edit 1.txt
git status
echo  "  remove local changes before indexing, data remove from file"
git checkout 1.txt
: init_log_command

goto reset_data
edit 1.txt
git add .
git status 
echo "remove from indexing but not remove from file"
git reset 1.txt
echo "remove changes from file "
git checkout 1.txt
git status
: reset_data

goto double_add_text
edit 1.txt
git add 1.txt
git status
edit 1.txt
git status 
rem "file in two state commit and not index "
git add 1.txt
git commit -m " lets go to eat"
: double_add_text

goto merge_data
git branch
git checkout -b dev-master
git edit 1.txt
git add .
git commit -m "+1"
git branch master
git merge dev-master
:merge_data

goto push_data
echo "enter password and name"
git push origin master
echo "ok"
echo "get changes "
git pull origin master
: push_data

Rem "for merge master from remote repositiory"
Rem git pull origin master --allow-unrelated-histories

echo Press ENTER to execute the command
Pause>nul


