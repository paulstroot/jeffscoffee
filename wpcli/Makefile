firstinstall: install

install:
	@echo ">>>>>>> ⚙️ Installing Wordpress parameters..."

# **** We don't need to install wordpress because we are importing an existing database. ****
#	wp core install \
#		--url=${WORDPRESS_WEBSITE_URL_WITHOUT_HTTP} \
#		--title=$(WORDPRESS_WEBSITE_TITLE) \
#		--admin_user=${WORDPRESS_ADMIN_USER} \
#		--admin_password=${WORDPRESS_ADMIN_PASSWORD} \
#		--admin_email=${WORDPRESS_ADMIN_EMAIL}

	wp option update siteurl ${WORDPRESS_WEBSITE_URL}
	wp search-replace 'http://localhost:8000' '${WORDPRESS_WEBSITE_URL}'