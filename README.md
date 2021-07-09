# Magento 2(Get form data and store in custom table)
1. This module consists of a frontend form that collects the entered data and stores it in custom table named **custom_test**.
2. Also, the data collected in the custom table is shown through a grid in the magento admin with the grid named as **EMPLOYEE DATA** which also consists of toolbars such as bookmark, column control, search, pagination as well as export.
## Basic Flow of the module
- Firstly, after cloning the git and extracting the folder wrap it inside folder **Custom** so inshort, create your directory as magento-root-directory/Custom/cloned_directory(Test).
- After that open the magento root directory in terminal and hit the following commands,
  - `sudo php bin/magento module:enable Custom_Test`
  - `sudo php bin/magento setup:upgrade`
  - `sudo php bin/magento setup:di:compile`
  - `sudo php bin/magento setup:static-content:deploy -f`
  - `sudo php bin/magento indexer:reindex` (optional)
  - `sudo php bin/magento cache:flush`
  - `sudo chmod 777 -R var/ pub/ generated/`
- Now, open your web browser and type in the following link (assuming for localhost or else type in https://your-magento-from-ftp) **localhost/magento-root-directory/test/index/index** you will see a form to enter data.
- After filling the data and saving it, now to cross check through the core open your phpmyadmin (assuming you installed it) and open the subsequent database of magento and in that search for table **custom_test** and you will see a new entry in the table.
- Now open your magento admin and you will observe a grid view named **EMPLOYEE DATA** inside that click on Manage Posts and you will observe the entries of the table in a grid manner which can be modified with various functions such as searching, column control,massactions,etc.

**Note :** Beware changing the module and vendor name since it can be a bit hectic and will require a keen vision on every file.

### Happy Coding :)
