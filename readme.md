## WP part:



# Usage
`npm i`
`npm run dev` / `npm run build`



- use cookies to check for webGL support


### Notes
- gzip
- jQuery is loaded default by Wordpress if something uses it in your template. If you enable WPML Ajax cookies and thats the ONLY place where you would use jQuery, then you shouldn't really include it at all. Instead use one extra hidden (e.g. input) field where you can submit the language code.
- Removing wp emoji stuff - we shpuld't really worry about it on our backend. But we can grip it out of our frontend with 4 lines of code. Please do so.
- No need to remove wp-embed scripts. Someone might embed your site into theirs as i guess, and its only 1.7KB. It can stay.
- More research on what WP block-library css can bring to the table on the frontend. If not much, then it might be time to move it out all together, and not just from the frontpage.
- If too many default settings like this will occur, then it might make sense to build a plugin file under mu-plugin, and relocate all terraforming defaults here from functions.php :
"These plugins always load (users cannot disable them) and should be just a file, not a subdir. However they show on the Plugins screen (so people won't forget about them) and are not overwritten when the theme is upgraded." 