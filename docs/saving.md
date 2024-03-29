# Saving your in-progress site to be worked on by another developer.

This Docker pattern and wordpress site can be spun up by another developer. You can commit all of your file changes to a new github repository and download to any other computer. Here are a couple things to check on to make sure your new project is saved to github properly.

- Run `make detach` to detach the site from the starter repository before creating a new github repository. This rmeoves the old .git directory from the root, the .git directory from the starter theme, and the default ./schema file from the root.
- Make sure database files are being comitted to the new github repository. This includes the entire contents of the ./msql directory.
- Make sure your custom wordpress theme is being comitted to the new github repository. You can check this by looking at the .gitignore file in the starter theme folder.
- Any plugins you are using (with the exception of custom built plugins) should be added to the wpcli/Makefile.theme file, and also added to the .gitignore file in the root. This allows the plug-ins to be installed using wp-cli instead of stored in github.

Any other steps? Please update this read-me file for future developers.
