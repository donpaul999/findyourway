Application architecture
===

# Frontend
Frontend components should be pretty minimalistic for the first release and they should include basic functionalities about searching and sorting in the dataset. The website should be one-page only and it is described as follows:
* It should contain some layout management
* Search box that should be able to submit requests to the API
* Display container that should receive that from the API and display it in a sorted manner
Summarizing, the components to be implemented are: Grid Manager Component, Search Component, Dataset Display Component

# Backend
* The database should consit of 2 tables:
    1. 'Subjects' - Each subject should be related to a list of faculties
    2. 'Faculties' - Each faculty should contain the following fields: 
        * Name
        * Campus name
        * Location
        * Website link
        * List to the coresponding subjects
* Main application should be implemented as a REST API that should return only JSON data.
* Sample map of the API:
    - GET `/api/faculties/<:id>`           - return the whole information about a specific faculty
    - GET `/api/faculties/?subjects=[...]` - it would receive a list of subjects and return the faculties that contain them
    - GET `/api/faculties/?name=<...>`     - it would receive a name and return the id of the faculty
    - GET `/api/subjects/<:id>`            - return the whole list of faculties for a specific subject (id and name only)
    - GET `/api/subjects/?name=<...>`      - return a subject id by its name
