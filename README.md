# wordpress-bitbucket-trigger-pipeline

Wordpress Plugin which triggers a BitBucket Pipeline when user publishes a post. Ideal for static generation tasks. For use with:
* Wordpress
* BitBucket


## Installation

Clone the repository to your Wordpress plugins folder at:

    /wp-content/plugins/wordpress-bitbucket-trigger-pipeline/

Activate the plugin via the wordpress interface at:

    http://localhost:8080/wp-admin/plugins.php

Go to your BitBucket project and get credentials

Then go to your server environment configuration e.g:

    Elastic Beanstalk > Configuration > Software Configuration

Set the environment variables using id and token from your BitBucket Pipelines credentials:

    BITBUCKET_PROJECT: XX
    BITBUCKET_USERNAME: XX
    BITBUCKET_PASSWORD: XX


## Usage

Go to your Wordpress Admin for posts:

    http://localhost:8080/wp-admin/edit.php

Publish an existing or new post and then check BitBucket pipeline to see it triggered.


## Directory structure

    bitbucket-trigger-pipeline.php   --> Wordpress Plugin Code
    readme.txt                       --> Wordpress Plugin Readme


## Contact

For more information please contact kmturley
