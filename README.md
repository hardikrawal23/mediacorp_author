**Mediacorp Author**

This module provides a new entity with name author.

The module is dependent on the following modules:
1. JSON API
2. JSON API Resources - Contributed module

JSON API Resources allows to create custom JSONAPI resources

Implementation:

1. Custom entity with name author is created via Annotation Plugin
2. Name, age and api-key fields are added on the entity.
3. Once installed the entity collection is visible at 'author/list' also available under Content > Author's Listing
4. Age is validated to be more than 18 and less than 65 via the Constraint API and mentioned in the baseFieldDefinitions method of Author class.
5. Custom JSON API resource can be access at '/jsonapi/author/content?author_id={author_id}&api_key={api_key}'
6. The author data can only be retrieved via this endpoint if the author_id and api-key mentioned are correct. Hence securing the author data, it can be fetched only with the respective API key.