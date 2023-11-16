<?php 
	while(have_posts()) {
		the_post(); // gets the posts ready for us to use
	} // Wordpress deafult loop
	wp_head();  // pulls in the information which goes in the header
	
	wp_footer(); // pulls in the information which goes in the footer
	
	add_action("the_action", "my_own_function"); // adding the information to the wp_head funtion
	
	get_theme_file_uri("/my-file/target-file.js"); // gets the link to the theme file
	
	the_title(); //gets the title of the post

	the_content() // gets content of the post

	the_post_thumbnail("Professor Portrait"); // gets the featured image, you can add a parameter to call a custom size of the image

	// FYI: every function starting with "the_" echos the value and every function starting with "get_" stores the value in memory which can "echoe"d or used else where

	get_the_ID(); // gets current post ID

	wp_get_post_parent_id(get_the_ID()) // gets parent id of the mention ID in the argument

	get_the_title(); // gets the title of the current post

	get_permalink(); // gets the permalink of the current post
	
	//FYI: Optional argument, where tell the post id to get desired value of that post
	wp_list_pages(array(
		"title_li" => NULL,
		"child_of" => $findChildOf
	)); // echoes the pages list

	get_pages(array(
		"child_of" => get_the_ID()
	)); // returns the pages list but doesn't echoe 

	wp_nav_menu(array(
		"theme_location" => "headerMenuLocation"
	)); // calling the menu in the correct location

	WP_Query(array(
		"post_type" => "professor",
		"posts_per_page" => -1,
		"orderby" => "title",
		"order" => "ASC",
		"meta_query" => array(
			array(
				"key" => "related_programs",
				"compare" => "LIKE",
				"value" => '"' . get_the_ID() . '"'
			)
		))
	) // Custom queries the the whole wordpress to get desired post type showing

	wp_reset_postdata(); // resets wordpress post data after a custom query to query again.

	date("Ymd"); // php default date gettign function or method.
	

?>