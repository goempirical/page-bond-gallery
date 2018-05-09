# page-bond-gallery

Page Bond Gallery - Marketing site

This is a child theme for Understrap.

# Setup

Install `wp-cli` and `mysql` as below, or using another method:

```zsh
brew install homebrew/php/wp-cli
brew install mysql
```

Now set up a database, user and download and config Wordpress into the local repo folder

```zsh
mysql -uroot -proot -e 'create database if not exists page_bond'
mysql -uroot -proot -e "grant all privileges on page_bond . * to page_bond@localhost identified by 'page_bond'"
mysql -uroot -proot -h 0.0.0.0 -e 'flush privileges'
wp core download
wp core install --url=localhost:8080 --title="Page Bond Gallery" --admin_user="Empirical" --admin_password="SOME-PASSWORD" --admin_email="noah@goempirical.com"
wp core config --dbname=page_bond --dbuser=page_bond --dbpass=page_bond --dbhost=0.0.0.0
```

Now within your local repo folder, install this repo. You can do that with a git clone.

```zsh
git clone https://github.com/goempirical/page-bond-gallery.git
```


Now change to the directory wp-content/themes/understrap and run npm install

```zsh
cd wp-content/themes/understrap
npm install
```

Now change to the directory wp-content/themes/page-bond-gallery and run npm install

```zsh
cd wp-content/themes/page-bond-gallery
npm install
```

# Git to/from wpengine

## Setup production in git

If you have access to the wpengine account portal, login, then go [here](https://my.wpengine.com/installs/pagebond/git_push)
Follow [these instructions](https://wpengine.com/support/set-git-push-user-portal/) to add your SSH key.

Now add the remote to your local:

```zsh
git add remote production git@git.wpengine.com:production/pagebond.git
```

You need to push a commit to this remote before you can pull anything. Make a commit and push it with:
```zsh
git push production master
```

Now you can pull from production/master as well.


## Setup staging in git

If you have access to the wpengine account portal, login, then go [here](https://my.wpengine.com/installs/stagepagebond/git_push)
Follow [these instructions](https://wpengine.com/support/set-git-push-user-portal/) to add your SSH key.

Now add the remote to your local:

```zsh
git add remote staging git@git.wpengine.com:production/stagepagebond.git
```

You need to push a commit to this remote before you can pull anything. Make a commit and push it with:
```zsh
git push staging master
```

Now you can pull from staging/master as well.
