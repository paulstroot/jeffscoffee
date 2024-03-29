# Wordpress Starter Theme

This starter uses Docker to spin up a WordPress development environment with a starter theme.

You can automatically deploy a local docker wordpress site in 5 minutes
using the following commands:

```bash
# Download a wordpress docker-compose example
git clone https://github.com/ocupop/wordpress_starter_docker
# CD into the working directory
cd wordpress_starter_docker
# Build and start installation
make firstinstall
```

Visit your site at <http://localhost:8000> and your database via phpMyAdmin
at <http://localhost:8080>.

Default identification for your wordpress website admin:

- `Username: ocupop`
- `Password: testpass`

Default identification for the phpMyAdmin interface:

- `Username: rootuser`
- `Password: rootpass`

**Useful set of commands to know**:

```bash
# FirstInstall - This downloads the starter theme from Github, then runs 'install'
make firstinstall

# install - sets up the site WITHOUT pulling theme from github (You should have a file at schema/__.sql, and wpcli/Makefile.theme )
make install

# starts or restarts a site that has been previously installed. Wordpress files should exist in ./wordpress, and database files should exist in ./schema
make start

# Stops the docker containers
make stop

# Stop and remove containers
make down

# Reset everything and start over
make clean
```




## Need more documentation?

- [Full instructions](docs/full-instructions.md)
- [Installing without Make](docs/without-make.md)
- [Beging editing your starter theme](docs/editing-starter-theme.md)
- [Saving your in-progress site to GitHub](docs/saving.md)

## References

- [Github repository this codbase was branched from](https://github.com/kassambara/wordpress-docker-compose)
- [Ocupop WordPress Starter Theme](https://github.com/ocupop/wordpress_starter_theme)
- [Ocupop WordPress Block Theme](https://github.com/ocupop/wordpress_starter_theme_block_child)
