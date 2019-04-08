# Hits
A simple page hit-counter for e107

## Features:
- Logs all hits to news items that are viewed. 
- Does not require javascript
- Reliable and accurate - hooks directly into news via php
- All hit counts are viewable from within the admin area. 

## Installation:
- Install the plugin via the Plugin Manager. 
- (optional) Add one or both of the following shortcodes to your news_template.php file within `$NEWS_TEMPLATE['view']['item']`:
    - {HITS_COUNTER} - for total hits
    - {HITS_UNIQUE}  - for unique hits 

