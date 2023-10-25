# Composer plugin demo
The official Composer's plugin reference: https://getcomposer.org/doc/articles/plugins.md.

Additional details about the demo: [https://cristianradulescu.github.io/2018/01/24/how-to-create-a-composer-plugin.html](https://cristianradulescu.github.io/2018-01-24-how-to-create-a-composer-plugin/).

## How to test
1. Update _composer.json_
```json
"require": {
  "cristianradulescu/composer-plugin-demo": "dev-master"
},
"repositories": [
  {
    "type": "git",
    "url": "https://github.com/cristianradulescu/composer-plugin-demo.git"
  }
]
```
2. Run _composer install_
3. If everything is installed correctly, run again any composer command. You should see the message that the plugin works at the top of the output.
```
$ ./composer.phar

========= Demo plugin =========
Congrats, your plugin works! :)
===============================

   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 1.6.2 2018-01-05 15:28:41
```

 

