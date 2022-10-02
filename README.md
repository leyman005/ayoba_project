# AYOBA Project
- I have created a custom module that reads rdf feeds url and display the contents
- In the admin -> config -> system menu link there is Ayoba RDF Feed menu item.
- That configuration page allows you to save the rdf url
- There is also a hook cron that runs every hour.
- Also an error log message that add an error message in case something fails.

--------------------------------------------------------------------------------------------------------------

## Theoretical Questions
- What would be the easiest and quickest way to test this custom feeds module.
  - Ayoba RDF Feed module will need to be installed
  - Go to the admin -> config -> system -> Ayoba RDF Feed menu item then enter a RDF URL and save
  - Na vigate to the following url: http://localhost:8888/Ayoba/ayoba_project/web/mycustomfeed to see the feeds
- Explain if you need to use entities and why.
  - The advantages of using them are being able to use any other API or module that ties in with them. For example, you can add fields to entities, and you can tie in with Views. But if you are not ever going to use things like this, then you may not need to use the Drupal Entity API.
- What can you do to reprocess feeds that have no images.
  - Clear the cache.
  - Use javascript to get the image from the feed link.
- What monitoring would you put in place to ensure your custom feeds module is always healthy
  - A cron job that runs periodically.
- What additional components would you add, if any.
  - Send an email if any error occurs.
