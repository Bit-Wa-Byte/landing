install: configure

configure:

	@echo "⚙️ Configuring Wordpress parameters..."
	wp core install \
		--url=${WORDPRESS_WEBSITE_URL_WITHOUT_HTTP} \
		--title="Bit Wa Byte" \
		--admin_user=${WORDPRESS_ADMIN_USER} \
		--admin_password=${WORDPRESS_ADMIN_PASSWORD} \
		--admin_email="ibrahim.rahhal3636@gmail.com"

	wp option update siteurl ${WORDPRESS_WEBSITE_URL}
	wp rewrite structure $(WORDPRESS_WEBSITE_POST_URL_STRUCTURE)
