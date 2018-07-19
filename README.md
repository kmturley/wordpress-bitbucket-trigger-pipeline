# wordpress-bitbucket-trigger-pipeline

Wordpress Plugin which triggers a BitBucket Pipeline when user publishes a post. Ideal for static generation tasks. For use with:
* Wordpress
* BitBucket


## Installation

Clone the repository to your Wordpress plugins folder at:

    /wp-content/plugins/wordpress-bitbucket-trigger-pipeline/

Activate the plugin via the wordpress interface at:

    http://localhost:8080/wp-admin/plugins.php

Go to your BitBucket project and generate an App Password using the guide:

    https://blog.bitbucket.org/2016/06/06/app-passwords-bitbucket-cloud/

Set the BitBucket variables in the 'Settings' > 'General' section on WordPress, using your BitBucket project, branch, username and app password:

    BITBUCKET PROJECT: XX
    BITBUCKET BRANCH: XX
    BITBUCKET USERNAME: XX
    BITBUCKET APP PASSWORD: XX


## Usage

Go to your Wordpress Admin for posts:

    http://localhost:8080/wp-admin/edit.php

Publish an existing or new post and then check BitBucket pipeline to see it triggered.


## Directory structure

    bitbucket-trigger-pipeline.php   --> Wordpress Plugin Code
    readme.txt                       --> Wordpress Plugin Readme


## Contact

For more information please contact kmturley
