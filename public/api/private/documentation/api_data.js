define({ "api": [
  {
    "group": "Event",
    "name": "CreateEvent",
    "type": "post",
    "url": "/v1/event",
    "title": "Create Event",
    "description": "<p>Create an event</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User / Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "title",
            "description": "<p>(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "text",
            "optional": false,
            "field": "description",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "dateTime",
            "optional": false,
            "field": "event_date",
            "description": "<p>(required) required|date_format:YmdHiT</p>"
          },
          {
            "group": "Parameter",
            "type": "text",
            "optional": false,
            "field": "location",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": false,
            "field": "banner_image",
            "description": "<p>(optional)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Event/UI/API/Routes/CreateEvent.v1.private.php",
    "groupTitle": "Event",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n        \"object\": \"Event\",\n            \"id\": \"pm8njbr9jl9eko4w\",\n            \"title\": \"New Event\",\n            \"description\": null,\n            \"event_date\": {\n            \"date\": \"2016-10-12 10:09:00.000000\",\n                \"timezone_type\": 2,\n                \"timezone\": \"GMT\"\n            },\n            \"location\": null,\n            \"banner_image\": \"event_image/banner_image/CpxxKJRvgLt7GUuEJNgvjQAV0lkQ4NqYbLCRvPZa.png\",\n            \"created_at\": {\n            \"date\": \"2017-11-27 04:13:15.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 04:13:15.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"1 second ago\",\n            \"readable_updated_at\": \"1 second ago\"\n        },\n        \"view_event\": {\n        \"href\": \"v1/event/pm8njbr9jl9eko4w\",\n            \"method\": \"GET\"\n        },\n        \"ngo\": {\n        \"data\": {\n            \"msg\": null,\n                \"object\": {\n                \"object\": \"NGO\",\n                    \"id\": \"ndvm9yrj4rao0jkq\",\n                    \"name\": \"انجمن همراهان محيط زيست آبادان\",\n                    \"description\": null,\n                    \"subjects\": [],\n                    \"area_of_activity\": null,\n                    \"address\": \"احمدآباد خيابان 15 منازل شركتي پلاك 3412\",\n                    \"zip_code\": \"0000000000\",\n                    \"type\": \"موسسه غير تجاري\",\n                    \"confirmed\": false,\n                    \"logo_photo\": null,\n                    \"banner_photo\": null,\n                    \"user_id\": \"qv4jdwrw0lanm6xg\",\n                    \"Registration specification\": {\n                    \"national_number\": \"14004590766\",\n                        \"registration_number\": \"236\",\n                        \"registration_date\": \"1393/09/12\",\n                        \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري آبادان\"\n                    },\n                    \"view_ngo\": {\n                    \"href\": \"v1/ngo/ndvm9yrj4rao0jkq\",\n                        \"method\": \"GET\"\n                    }\n                }\n            }\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"NGO\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Event",
    "name": "DeleteEvent",
    "type": "delete",
    "url": "/v1/event/{id}",
    "title": "Delete Event",
    "description": "<p>Delete an Event by ID</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User / Owner"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"message\": \"Event (oj64bp5zjl8ywzn0) Deleted Successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Event/UI/API/Routes/DeleteEvent.v1.private.php",
    "groupTitle": "Event"
  },
  {
    "group": "Event",
    "name": "GetEvent",
    "type": "get",
    "url": "/v1/event/{id}",
    "title": "Get Event",
    "description": "<p>Get an event by ID</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "app/Containers/Event/UI/API/Routes/GetEvent.v1.private.php",
    "groupTitle": "Event",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n        \"object\": \"Event\",\n            \"id\": \"pm8njbr9jl9eko4w\",\n            \"title\": \"New Event\",\n            \"description\": null,\n            \"event_date\": {\n            \"date\": \"2016-10-12 10:09:00.000000\",\n                \"timezone_type\": 2,\n                \"timezone\": \"GMT\"\n            },\n            \"location\": null,\n            \"banner_image\": \"event_image/banner_image/CpxxKJRvgLt7GUuEJNgvjQAV0lkQ4NqYbLCRvPZa.png\",\n            \"created_at\": {\n            \"date\": \"2017-11-27 04:13:15.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 04:13:15.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"1 second ago\",\n            \"readable_updated_at\": \"1 second ago\"\n        },\n        \"view_event\": {\n        \"href\": \"v1/event/pm8njbr9jl9eko4w\",\n            \"method\": \"GET\"\n        },\n        \"ngo\": {\n        \"data\": {\n            \"msg\": null,\n                \"object\": {\n                \"object\": \"NGO\",\n                    \"id\": \"ndvm9yrj4rao0jkq\",\n                    \"name\": \"انجمن همراهان محيط زيست آبادان\",\n                    \"description\": null,\n                    \"subjects\": [],\n                    \"area_of_activity\": null,\n                    \"address\": \"احمدآباد خيابان 15 منازل شركتي پلاك 3412\",\n                    \"zip_code\": \"0000000000\",\n                    \"type\": \"موسسه غير تجاري\",\n                    \"confirmed\": false,\n                    \"logo_photo\": null,\n                    \"banner_photo\": null,\n                    \"user_id\": \"qv4jdwrw0lanm6xg\",\n                    \"Registration specification\": {\n                    \"national_number\": \"14004590766\",\n                        \"registration_number\": \"236\",\n                        \"registration_date\": \"1393/09/12\",\n                        \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري آبادان\"\n                    },\n                    \"view_ngo\": {\n                    \"href\": \"v1/ngo/ndvm9yrj4rao0jkq\",\n                        \"method\": \"GET\"\n                    }\n                }\n            }\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"NGO\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Event",
    "name": "ListAllEvents",
    "type": "get",
    "url": "/v1/event",
    "title": "List Events",
    "description": "<p>Lists all Events (if no query parameter is given)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "app/Containers/Event/UI/API/Routes/ListAllEvents.v1.private.php",
    "groupTitle": "Event",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n        \"object\": \"Event\",\n            \"id\": \"pm8njbr9jl9eko4w\",\n            \"title\": \"New Event\",\n            \"description\": null,\n            \"event_date\": {\n            \"date\": \"2016-10-12 10:09:00.000000\",\n                \"timezone_type\": 2,\n                \"timezone\": \"GMT\"\n            },\n            \"location\": null,\n            \"banner_image\": \"event_image/banner_image/CpxxKJRvgLt7GUuEJNgvjQAV0lkQ4NqYbLCRvPZa.png\",\n            \"created_at\": {\n            \"date\": \"2017-11-27 04:13:15.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 04:13:15.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"1 second ago\",\n            \"readable_updated_at\": \"1 second ago\"\n        },\n        \"view_event\": {\n        \"href\": \"v1/event/pm8njbr9jl9eko4w\",\n            \"method\": \"GET\"\n        },\n        \"ngo\": {\n        \"data\": {\n            \"msg\": null,\n                \"object\": {\n                \"object\": \"NGO\",\n                    \"id\": \"ndvm9yrj4rao0jkq\",\n                    \"name\": \"انجمن همراهان محيط زيست آبادان\",\n                    \"description\": null,\n                    \"subjects\": [],\n                    \"area_of_activity\": null,\n                    \"address\": \"احمدآباد خيابان 15 منازل شركتي پلاك 3412\",\n                    \"zip_code\": \"0000000000\",\n                    \"type\": \"موسسه غير تجاري\",\n                    \"confirmed\": false,\n                    \"logo_photo\": null,\n                    \"banner_photo\": null,\n                    \"user_id\": \"qv4jdwrw0lanm6xg\",\n                    \"Registration specification\": {\n                    \"national_number\": \"14004590766\",\n                        \"registration_number\": \"236\",\n                        \"registration_date\": \"1393/09/12\",\n                        \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري آبادان\"\n                    },\n                    \"view_ngo\": {\n                    \"href\": \"v1/ngo/ndvm9yrj4rao0jkq\",\n                        \"method\": \"GET\"\n                    }\n                }\n            }\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"NGO\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Event",
    "name": "UpdateEvent",
    "type": "put",
    "url": "/v1/event/{id}",
    "title": "Update Event",
    "description": "<p>Update a given event</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User / Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "title",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "text",
            "optional": false,
            "field": "description",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "dateTime",
            "optional": false,
            "field": "event_date",
            "description": "<p>(optional) date_format:YmdHiT</p>"
          },
          {
            "group": "Parameter",
            "type": "text",
            "optional": false,
            "field": "location",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": false,
            "field": "banner_image",
            "description": "<p>(optional)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Event/UI/API/Routes/UpdateEvent.v1.private.php",
    "groupTitle": "Event",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n        \"object\": \"Event\",\n            \"id\": \"pm8njbr9jl9eko4w\",\n            \"title\": \"New Event\",\n            \"description\": null,\n            \"event_date\": {\n            \"date\": \"2016-10-12 10:09:00.000000\",\n                \"timezone_type\": 2,\n                \"timezone\": \"GMT\"\n            },\n            \"location\": null,\n            \"banner_image\": \"event_image/banner_image/CpxxKJRvgLt7GUuEJNgvjQAV0lkQ4NqYbLCRvPZa.png\",\n            \"created_at\": {\n            \"date\": \"2017-11-27 04:13:15.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 04:13:15.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"1 second ago\",\n            \"readable_updated_at\": \"1 second ago\"\n        },\n        \"view_event\": {\n        \"href\": \"v1/event/pm8njbr9jl9eko4w\",\n            \"method\": \"GET\"\n        },\n        \"ngo\": {\n        \"data\": {\n            \"msg\": null,\n                \"object\": {\n                \"object\": \"NGO\",\n                    \"id\": \"ndvm9yrj4rao0jkq\",\n                    \"name\": \"انجمن همراهان محيط زيست آبادان\",\n                    \"description\": null,\n                    \"subjects\": [],\n                    \"area_of_activity\": null,\n                    \"address\": \"احمدآباد خيابان 15 منازل شركتي پلاك 3412\",\n                    \"zip_code\": \"0000000000\",\n                    \"type\": \"موسسه غير تجاري\",\n                    \"confirmed\": false,\n                    \"logo_photo\": null,\n                    \"banner_photo\": null,\n                    \"user_id\": \"qv4jdwrw0lanm6xg\",\n                    \"Registration specification\": {\n                    \"national_number\": \"14004590766\",\n                        \"registration_number\": \"236\",\n                        \"registration_date\": \"1393/09/12\",\n                        \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري آبادان\"\n                    },\n                    \"view_ngo\": {\n                    \"href\": \"v1/ngo/ndvm9yrj4rao0jkq\",\n                        \"method\": \"GET\"\n                    }\n                }\n            }\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"NGO\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Event",
    "name": "addImageToEvent",
    "type": "POST",
    "url": "/v1/event/image",
    "title": "Add image to event",
    "description": "<p>Add image to the given event</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "event_id",
            "description": "<p>(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": false,
            "field": "image",
            "description": "<p>(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Event/UI/API/Routes/AddImageToEvent.v1.private.php",
    "groupTitle": "Event"
  },
  {
    "group": "NGO",
    "name": "CreateNGO",
    "type": "POST",
    "url": "/v1/ngo",
    "title": "Create NGO",
    "description": "<p>Create a NGO</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "national_id",
            "description": "<p>(required) required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/NGO/UI/API/Routes/CreateNgo.v1.private.php",
    "groupTitle": "NGO",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n        \"object\": \"NGO\",\n            \"id\": \"ndvm9yrj4rao0jkq\",\n            \"name\": \"انجمن همراهان محيط زيست آبادان\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"address\": \"احمدآباد خيابان 15 منازل شركتي پلاك 3412\",\n            \"zip_code\": \"0000000000\",\n            \"type\": \"موسسه غير تجاري\",\n            \"confirmed\": false,\n            \"logo_photo\": null,\n            \"banner_photo\": null,\n            \"user_id\": \"qv4jdwrw0lanm6xg\",\n            \"Registration specification\": {\n            \"national_number\": \"14004590766\",\n                \"registration_number\": \"236\",\n                \"registration_date\": \"1393/09/12\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري آبادان\"\n            },\n            \"view_ngo\": {\n            \"href\": \"v1/ngo/ndvm9yrj4rao0jkq\",\n                \"method\": \"GET\"\n            }\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"User\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "NGO",
    "name": "DeleteNGO",
    "type": "DELETE",
    "url": "/v1/ngo/{id}",
    "title": "Delete NGO",
    "description": "<p>Delete a NGO by ID</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Owner | Admin"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"message\": \"NGO (oj64bp5zjl8ywzn0) Deleted Successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/NGO/UI/API/Routes/DeleteNgo.v1.private.php",
    "groupTitle": "NGO"
  },
  {
    "group": "NGO",
    "name": "GetNGO",
    "type": "GET",
    "url": "/v1/ngo/{id}",
    "title": "Get NGO",
    "description": "<p>Get a NGO by ID</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "app/Containers/NGO/UI/API/Routes/GetNgo.v1.private.php",
    "groupTitle": "NGO",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n        \"object\": \"NGO\",\n            \"id\": \"ndvm9yrj4rao0jkq\",\n            \"name\": \"انجمن همراهان محيط زيست آبادان\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"address\": \"احمدآباد خيابان 15 منازل شركتي پلاك 3412\",\n            \"zip_code\": \"0000000000\",\n            \"type\": \"موسسه غير تجاري\",\n            \"confirmed\": false,\n            \"logo_photo\": null,\n            \"banner_photo\": null,\n            \"user_id\": \"qv4jdwrw0lanm6xg\",\n            \"Registration specification\": {\n            \"national_number\": \"14004590766\",\n                \"registration_number\": \"236\",\n                \"registration_date\": \"1393/09/12\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري آبادان\"\n            },\n            \"view_ngo\": {\n            \"href\": \"v1/ngo/ndvm9yrj4rao0jkq\",\n                \"method\": \"GET\"\n            }\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"User\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "NGO",
    "name": "UpdateNGO",
    "type": "PUT",
    "url": "/v1/ngo/{id}",
    "title": "Update NGO",
    "description": "<p>Update a given NGO</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Owner | Admin"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "text",
            "optional": false,
            "field": "description",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "area_of_activity",
            "description": "<p>(optional) max:255</p>"
          },
          {
            "group": "Parameter",
            "type": "text",
            "optional": false,
            "field": "address",
            "description": "<p>(optional) (optional) max:255</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "zip_code",
            "description": "<p>(optional) (optional) max:255</p>"
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": false,
            "field": "logo_photo",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": false,
            "field": "banner_photo",
            "description": "<p>(optional)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/NGO/UI/API/Routes/UpdateNgo.v1.private.php",
    "groupTitle": "NGO",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n        \"object\": \"NGO\",\n            \"id\": \"ndvm9yrj4rao0jkq\",\n            \"name\": \"انجمن همراهان محيط زيست آبادان\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"address\": \"احمدآباد خيابان 15 منازل شركتي پلاك 3412\",\n            \"zip_code\": \"0000000000\",\n            \"type\": \"موسسه غير تجاري\",\n            \"confirmed\": false,\n            \"logo_photo\": null,\n            \"banner_photo\": null,\n            \"user_id\": \"qv4jdwrw0lanm6xg\",\n            \"Registration specification\": {\n            \"national_number\": \"14004590766\",\n                \"registration_number\": \"236\",\n                \"registration_date\": \"1393/09/12\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري آبادان\"\n            },\n            \"view_ngo\": {\n            \"href\": \"v1/ngo/ndvm9yrj4rao0jkq\",\n                \"method\": \"GET\"\n            }\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"User\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "NGO",
    "name": "findNgoByNationalId",
    "type": "GET",
    "url": "/v1/ngo/find/{national_id}",
    "title": "Find NGO By National ID",
    "description": "<p>Search a NGO in National Registration website and return it's data if ngo is found</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"NGO\",\n        \"id\": \"\",\n        \"name\": \"انجمن همراهان محيط زيست آبادان\",\n        \"description\": null,\n        \"subjects\": [],\n        \"area_of_activity\": null,\n        \"address\": \"احمدآباد خيابان 15 منازل شركتي پلاك 3412\",\n        \"zip_code\": \"0000000000\",\n        \"type\": \"موسسه غير تجاري\",\n        \"confirmed\": false,\n        \"logo_photo\": null,\n        \"banner_photo\": null,\n        \"user_id\": \"\",\n        \"Registration specification\": {\n        \"national_number\": \"14004590766\",\n            \"registration_number\": \"236\",\n            \"registration_date\": \"1393/09/12\",\n            \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري آبادان\"\n        }\n    },\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/NGO/UI/API/Routes/FindNgoByNationalId.v1.private.php",
    "groupTitle": "NGO"
  },
  {
    "group": "NGO",
    "name": "getNgoSubjects",
    "type": "GET",
    "url": "/v1/ngo/resources/subject",
    "title": "Get NGO Subjects",
    "description": "<p>Get all ngo subjects</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"msg\": \"Found Subject\",\n            \"object\": {\n            \"object\": \"Subject\",\n                \"id\": 1,\n                \"subject\": \"test1\"\n            }\n        },\n        {\n            \"msg\": \"Found Subject\",\n            \"object\": {\n            \"object\": \"Subject\",\n                \"id\": 2,\n                \"subject\": \"test2\"\n            }\n        },\n        {\n            \"msg\": \"Found Subject\",\n            \"object\": {\n            \"object\": \"Subject\",\n                \"id\": 3,\n                \"subject\": \"test3\"\n            }\n        },\n        {\n            \"msg\": \"Found Subject\",\n            \"object\": {\n            \"object\": \"Subject\",\n                \"id\": 4,\n                \"subject\": \"test4\"\n            }\n        }\n    ],\n    \"meta\": {\n    \"include\": [],\n        \"custom\": [],\n        \"pagination\": {\n        \"total\": 4,\n            \"count\": 4,\n            \"per_page\": 1000,\n            \"current_page\": 1,\n            \"total_pages\": 1,\n            \"links\": []\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/NGO/UI/API/Routes/GetNgoSubjects.v1.private.php",
    "groupTitle": "NGO"
  },
  {
    "group": "NGO",
    "name": "listAllNGOs",
    "type": "GET",
    "url": "/v1/ngo",
    "title": "List NGOs",
    "description": "<p>Lists all NGOs (if no query parameter is given)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "app/Containers/NGO/UI/API/Routes/ListAllNgos.v1.private.php",
    "groupTitle": "NGO",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n        \"object\": \"NGO\",\n            \"id\": \"ndvm9yrj4rao0jkq\",\n            \"name\": \"انجمن همراهان محيط زيست آبادان\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"address\": \"احمدآباد خيابان 15 منازل شركتي پلاك 3412\",\n            \"zip_code\": \"0000000000\",\n            \"type\": \"موسسه غير تجاري\",\n            \"confirmed\": false,\n            \"logo_photo\": null,\n            \"banner_photo\": null,\n            \"user_id\": \"qv4jdwrw0lanm6xg\",\n            \"Registration specification\": {\n            \"national_number\": \"14004590766\",\n                \"registration_number\": \"236\",\n                \"registration_date\": \"1393/09/12\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري آبادان\"\n            },\n            \"view_ngo\": {\n            \"href\": \"v1/ngo/ndvm9yrj4rao0jkq\",\n                \"method\": \"GET\"\n            }\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"User\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "OAuth2",
    "name": "ClientAdminWebAppLoginProxy",
    "type": "post",
    "url": "/v1/clients/web/admin/login",
    "title": "Login (Password Grant with proxy)",
    "description": "<p>Login Users using their email and password, without client_id and client_secret.</p>",
    "version": "1.0.0",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>user email</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>user password</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n  \"refresh_token\": \"ZFDPA1S7H8Wydjkjl+xt+hPGWTagX...\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/ProxyLoginForAdminWebClient.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "ClientAdminWebAppRefreshProxy",
    "type": "post",
    "url": "/v1/clients/web/admin/refresh",
    "title": "Refresh",
    "description": "<p>If <code>refresh_token</code> is not provided the w'll try to get it from the http cookie.</p>",
    "version": "1.0.0",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "refresh_token",
            "description": "<p>The refresh Token</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n  \"refresh_token\": \"ZFDPA1S7H8Wydjkjl+xt+hPGWTagX...\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/ProxyRefreshForAdminWebClient.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "LoginCredentialsGrant",
    "type": "post",
    "url": "/v1/oauth/token",
    "title": "Login (Client Credentials Grant)",
    "description": "<p>Login Users using their username and passwords. (For Third-Party Clients). You must have client ID and secret first. You can generate them by creating new Client in our Web App.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "client_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "client_secret",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "grant_type",
            "description": "<p>must be <code>client_credentials</code></p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "scope",
            "description": "<p>you can leave it empty</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/LoginUsingCredentialGrant.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "LoginPasswordGrant",
    "type": "post",
    "url": "/v1/oauth/token",
    "title": "Login (Password Grant)",
    "description": "<p>Login Users using their username and passwords. (For First-Party Clients)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "username",
            "description": "<p>user email</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>user password</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "client_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "client_secret",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "grant_type",
            "description": "<p>must be <code>password</code></p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "scope",
            "description": "<p>you can leave it empty</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n  \"refresh_token\": \"Oukd61zgKzt8TBwRjnasd...\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/LoginUsingPasswordGrant.v1.private.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "Logout",
    "type": "post",
    "url": "/v1/logout",
    "title": "Logout",
    "description": "<p>User Logout. (Revoking Access Token)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 Accepted\n{\n  \"message\": \"Token revoked successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/Logout.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "Payment",
    "name": "deletePaymentAccount",
    "type": "DELETE",
    "url": "/v1/user/paymentaccounts/:id",
    "title": "Delete Payment Account",
    "description": "<p>Deletes a payment account. Also deletes the corresponding model with the account details (e.g., for stripe, ...)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    // TODO: Insert the response of the request here.\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/DeletePaymentAccount.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "Payment",
    "name": "getPaymentAccount",
    "type": "GET",
    "url": "/v1/user/paymentaccounts/:id",
    "title": "Find Payment Account by ID",
    "description": "<p>Find Details for a specific payment account. Note that this outputs respective &quot;visible&quot; fields from the model of the Payment Provider (e.g., Paypal)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // TODO: Insert the response of the request here.\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/GetPaymentAccount.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "Payment",
    "name": "getPaymentAccountDetails",
    "type": "GET",
    "url": "/v1/user/paymentaccounts/:id",
    "title": "Find Payment Account Details",
    "description": "<p>Find Details for a specific payment account. Note that this outputs respective &quot;visible&quot; fields from the model of the Payment Provider (e.g., Paypal)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/FindPaymentAccountDetails.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "Payment",
    "name": "getPaymentAccounts",
    "type": "GET",
    "url": "/v1/user/paymentaccounts",
    "title": "Get All Payment Accounts",
    "description": "<p>Get All Payment Accounts for this user</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/GetAllPaymentAccounts.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "Payment",
    "name": "updatePaymentAccount",
    "type": "PATCH",
    "url": "/v1/user/paymentaccounts/:id",
    "title": "Update Payment Account",
    "description": "<p>Updates a single Payment Account. Does NOT (!) update the account credentials from the respective payment gateway (e.g., Paypal).</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    // TODO: Insert the response of the request here.\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/UpdatePaymentAccount.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "RolePermission",
    "name": "assignUserToRole",
    "type": "post",
    "url": "/v1/roles/assign",
    "title": "Assign User to Roles",
    "description": "<p>Assign new roles to user. This endpoint does not sync the user with the new roles. It simply assign new role to the user. So make sure to never send an already assigned role since it will cause an error. To sync (update) all existing roles with the new ones use <code>/roles/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": "<p>User ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "roles_ids",
            "description": "<p>Role ID or Array of Roles ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/AssignUserToRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"avatar\": \"avatars/gMmrxFeNWFYfGtzJtSP305pJSrgpnAizNM2XgiEO.jpeg\",\n            \"confirmed\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "attachPermissionToRole",
    "type": "post",
    "url": "/v1/permissions/attach",
    "title": "Attach Permissions to Role",
    "description": "<p>Attach new permissions to role. This endpoint does not sync the role with the new permissions. It simply attach new permission to the role. So make sure to never send an already attached permission since it will cause an error. To sync (update) all existing permissions with the new ones use <code>/permissions/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "role_id",
            "description": "<p>Role ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "permissions_ids",
            "description": "<p>Permission ID or Array of Permissions ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/AttachPermissionToRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "createRole",
    "type": "post",
    "url": "/v1/roles",
    "title": "Create a Role",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Unique Role Name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "display_name",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/CreateRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "deleteRole",
    "type": "delete",
    "url": "/v1/roles/:id",
    "title": "Delete a Role",
    "description": "<p>Delete Role by ID</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated Role"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n    \"message\": \"Role (manager) Deleted Successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/DeleteRole.v1.private.php",
    "groupTitle": "RolePermission"
  },
  {
    "group": "RolePermission",
    "name": "detachPermissionFromRole",
    "type": "post",
    "url": "/v1/permissions/detach",
    "title": "Detach Permissions from Role",
    "description": "<p>Detach existing permission from role. This endpoint does not sync the role It just detach the passed permissions from the role. So make sure to never send an non attached permission since it will cause an error. To sync (update) all existing permissions with the new ones use <code>/permissions/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "role_id",
            "description": "<p>Role ID</p>"
          },
          {
            "group": "Parameter",
            "type": "String-Array",
            "optional": false,
            "field": "permissions_ids",
            "description": "<p>Permission ID or Array of Permissions ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/DetachPermissionsFromRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getAllPermissions",
    "type": "get",
    "url": "/v1/permissions",
    "title": "Get All Permission",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/GetAllPermissions.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getAllRoles",
    "type": "get",
    "url": "/v1/roles",
    "title": "Get All Roles",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/GetAllRoles.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getPermission",
    "type": "get",
    "url": "/v1/permissions/:id",
    "title": "Find a Permission by ID",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/FindPermission.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Permission\",\n      \"id\":\"n9kq6345javb05je\",\n      \"name\":\"amet-ducimus\",\n      \"description\":null,\n      \"display_name\":null\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getRole",
    "type": "get",
    "url": "/v1/roles/:id",
    "title": "Find a Role by ID",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/FindRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "revokeRoleFromUser",
    "type": "post",
    "url": "/v1/roles/revoke",
    "title": "Revoke/Remove Roles from User",
    "description": "<p>Revoke existing roles from user. This endpoint does not sync the user It just revoke the passed role from the user. So make sure to never send a non assigned role since it will cause an error. To sync (update) all existing roles with the new ones use <code>/roles/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": "<p>user ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "roles_ids",
            "description": "<p>Role ID or Array of Role ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/RevokeUserFromRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"avatar\": \"avatars/gMmrxFeNWFYfGtzJtSP305pJSrgpnAizNM2XgiEO.jpeg\",\n            \"confirmed\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "syncPermissionOnRole",
    "type": "post",
    "url": "/v1/permissions/sync",
    "title": "Sync Permissions on Role",
    "description": "<p>You can use this endpoint instead of <code>permissions/attach</code> &amp; <code>permissions/detach</code>. The sync endpoint will override all existing role permissions with the new one sent to this endpoint.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "role_id",
            "description": "<p>Role ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "permissions_ids",
            "description": "<p>Permission ID or Array of Permissions ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/SyncPermissionOnRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "syncUserRoles",
    "type": "post",
    "url": "/v1/roles/sync",
    "title": "Sync User Roles",
    "description": "<p>You can use this endpoint instead of <code>roles/assign</code> &amp; <code>roles/revoke</code>. The sync endpoint will override all existing user roles with the new one sent to this endpoint.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": "<p>User ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "roles_ids",
            "description": "<p>Role ID or Array of Roles ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/SyncUserRoles.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"avatar\": \"avatars/gMmrxFeNWFYfGtzJtSP305pJSrgpnAizNM2XgiEO.jpeg\",\n            \"confirmed\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Setting",
    "name": "getAllSettings",
    "type": "GET",
    "url": "/v1/settings",
    "title": "Get All Settings",
    "description": "<p>Get All settings for the application</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Setting\",\n            \"id\": \"damq35egme74k0xv\",\n            \"key\": \"foo\",\n            \"value\": \"bar\"\n        },\n        {\n            \"object\": \"Setting\",\n            \"id\": \"damq35egme74k0xv\",\n            \"key\": \"test\",\n            \"value\": \"456\"\n        },\n        {\n            \"object\": \"Setting\",\n            \"id\": \"damq35egme74k0xv\",\n            \"key\": \"logout\",\n            \"value\": \"false\"\n        }\n    ],\n    \"meta\": {\n\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/GetAllSettings.v1.private.php",
    "groupTitle": "Setting"
  },
  {
    "group": "Settings",
    "name": "createSetting",
    "type": "POST",
    "url": "/v1/settings",
    "title": "Create Setting",
    "description": "<p>Create a new setting for the application</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"Setting\",\n        \"id\": \"aadfa72342sa\",\n        \"key\": \"hello\",\n        \"value\": \"world\"\n    },\n    \"meta\": {\n        \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/CreateSetting.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "Settings",
    "name": "deleteSetting",
    "type": "DELETE",
    "url": "/v1/settings/:id",
    "title": "Delete Setting",
    "description": "<p>Deletes a setting entry</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 204 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/DeleteSetting.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "Settings",
    "name": "updateSetting",
    "type": "PATCH",
    "url": "/v1/settings/:id",
    "title": "Update Setting",
    "description": "<p>Updates a setting entry (both key / value)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"Setting\",\n        \"id\": \"aadfa72342sa\",\n        \"key\": \"foo\",\n        \"value\": \"bar\"\n    },\n    \"meta\": {\n        \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/UpdateSetting.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "SocialAuth",
    "name": "socialAuthFb",
    "type": "post",
    "url": "/v1/auth/facebook",
    "title": "",
    "description": "<p>After getting the User Token from facebook, call this Endpoint passing the user token to it in order to fetch his data and create the user in our database if not exist or return the existing one. For testing purposes use this endpoint <code>auth/facebook</code> to get the token.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "optional": false,
            "field": "oauth_token",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"User\",\n        \"id\": \"eqwja3vw94kzmxr1\",\n        \"name\": \"Mahmoud Zalt\",\n        \"email\": null,\n        \"confirmed\": false,\n        \"nickname\": null,\n        \"gender\": null,\n        \"birth\": null,\n        \"social_auth_provider\": \"facebook\",\n        \"social_id\": \"42719726\",\n        \"social_avatar\": {\n            \"avatar\": null,\n            \"original\": null\n        },\n        \"created_at\": {\n            \"date\": \"2017-10-20 21:45:03.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n            \"date\": \"2017-10-20 21:45:03.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"readable_created_at\": \"48 minutes ago\",\n        \"readable_updated_at\": \"48 minutes ago\"\n    },\n    \"meta\": {\n        \"include\": [\n            \"roles\"\n        ],\n        \"custom\": {\n            \"token_type\": \"personal\",\n            \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUxI...\"\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Socialauth/UI/API/Routes/AuthenticateAll.v1.private.php",
    "groupTitle": "SocialAuth"
  },
  {
    "group": "SocialAuth",
    "name": "socialAuthTw",
    "type": "post",
    "url": "/v1/auth/twitter",
    "title": "",
    "description": "<p>After getting the User Token from twitter, call this Endpoint passing the user token to it in order to fetch his data and create the user in our database if not exist or return the existing one. For testing purposes use this endpoint <code>auth/twitter/</code> to get the token.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "optional": false,
            "field": "oauth_token",
            "description": ""
          },
          {
            "group": "Parameter",
            "optional": false,
            "field": "oauth_secret",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"User\",\n        \"id\": \"eqwja3vw94kzmxr0\",\n        \"name\": \"Mahmoud Zalt\",\n        \"email\": null,\n        \"confirmed\": false,\n        \"nickname\": null,\n        \"gender\": null,\n        \"birth\": null,\n        \"social_auth_provider\": \"twitter\",\n        \"social_id\": \"42719726\",\n        \"social_avatar\": {\n            \"avatar\": \"http://pbs.twimg.com/profile_images/1111111111/PENrcePC_normal.jpg\",\n            \"original\": null\n        },\n        \"created_at\": {\n            \"date\": \"2017-10-20 21:45:03.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n            \"date\": \"2017-10-20 21:45:03.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"readable_created_at\": \"48 minutes ago\",\n        \"readable_updated_at\": \"48 minutes ago\"\n    },\n    \"meta\": {\n        \"include\": [\n            \"roles\"\n        ],\n        \"custom\": {\n            \"token_type\": \"personal\",\n            \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI...\"\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Socialauth/UI/API/Routes/AuthenticateAll.v1.private.php",
    "groupTitle": "SocialAuth"
  },
  {
    "group": "Storage",
    "name": "downloadFile",
    "type": "GET",
    "url": "/v1/download/{folder}/{file_name}",
    "title": "Download File",
    "description": "<p>Download a file from server's public folder</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Storage/UI/API/Routes/DownloadFile.v1.private.php",
    "groupTitle": "Storage"
  },
  {
    "group": "Stripe",
    "name": "createStripeAccount",
    "type": "post",
    "url": "/v1/user/payments/accounts/stripe",
    "title": "Create Stripe Account",
    "description": "<p>Before calling this endpoint make sure to call Stripe first and get the <code>customer_id</code>. You may use &quot;Stripe Checkout&quot; or &quot;Stripe.js&quot; to make your Stripe call. This Information will be used to charge the user whenever he to purchase anything on the platform.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "customer_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "card_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "card_funding",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "card_last_digits",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "card_fingerprint",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nickname",
            "description": "<p>payment nickname for your usage</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n   \"message\":\"Stripe account created successfully.\",\n   \"stripe_account_id\":1\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Stripe/UI/API/Routes/CreateStripeAccount.v1.private.php",
    "groupTitle": "Stripe"
  },
  {
    "group": "Stripe",
    "name": "updateStripeAccount",
    "type": "PATCH",
    "url": "/v1/user/payments/accounts/stripe/:id",
    "title": "Update Stripe Account",
    "description": "<p>Update a stripe account.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Stripe/UI/API/Routes/UpdateStripeAccount.v1.private.php",
    "groupTitle": "Stripe"
  },
  {
    "group": "User",
    "name": "CreateAdmin",
    "type": "post",
    "url": "/v1/admin",
    "title": "Create Admin type Users",
    "description": "<p>Creating non client Users, form the Dashboard.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "first_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "last_name",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/CreateAdmin.v1.private.php",
    "groupTitle": "User",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"avatar\": \"avatars/gMmrxFeNWFYfGtzJtSP305pJSrgpnAizNM2XgiEO.jpeg\",\n            \"confirmed\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "User",
    "name": "DeleteUser",
    "type": "delete",
    "url": "/v1/user/{id}",
    "title": "Delete User (admin, client..)",
    "description": "<p>Delete Users of any type (Admin, Client,...)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authorized User | Owner"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n    \"message\": \"User (z5ds4as5d4zxc) Deleted Successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/DeleteUser.v1.private.php",
    "groupTitle": "User"
  },
  {
    "group": "User",
    "name": "FallowNgo",
    "type": "POST",
    "url": "/v1/user/fallow",
    "title": "Fallow NGO",
    "description": "<p>Fallow the specified ngo</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/FallowNgo.v1.private.php",
    "groupTitle": "User"
  },
  {
    "group": "User",
    "name": "GetAllAdmins",
    "type": "get",
    "url": "/v1/admin",
    "title": "Get Admin Users",
    "description": "<p>Get all Users where role <code>Admin</code>. You can search for Users by email, name and ID. Example: <code>?search=Mahmoud</code> or <code>?search=whatever@mail.com</code>. You can specify the field as follow <code>?search=email:whatever@mail.com</code> or <code>?search=id:20</code>. You can search by multiple fields as follow: <code>?search=name:Mahmoud&amp;email:whatever@mail.com</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated Admin"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAllAdmins.v1.private.php",
    "groupTitle": "User",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "User",
    "name": "GetAllClients",
    "type": "get",
    "url": "/v1/client",
    "title": "Get Client Users",
    "description": "<p>Get all Users where role <code>Client</code>. You can search for Users by email, name and ID. Example: <code>?search=Mahmoud</code> or <code>?search=whatever@mail.com</code>. You can specify the field as follow <code>?search=email:whatever@mail.com</code> or <code>?search=id:20</code>. You can search by multiple fields as follow: <code>?search=name:Mahmoud&amp;email:whatever@mail.com</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAllClients.v1.private.php",
    "groupTitle": "User",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "User",
    "name": "GetAllUsers",
    "type": "get",
    "url": "/v1/user",
    "title": "Get All Users",
    "description": "<p>Get all Application Users (clients and admins). For all registered users. For all the &quot;Clients&quot; only you can use <code>/clients</code>. And for all &quot;Admins&quot; only you can use <code>/admins</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAllUsers.v1.private.php",
    "groupTitle": "User",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "User",
    "name": "GetAuthenticatedUser",
    "type": "GET",
    "url": "/v1/profile",
    "title": "Get Logged in user Profile",
    "description": "<p>Find the user details of the logged in user from its Token. (without specifying his ID)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAuthenticatedUser.v1.private.php",
    "groupTitle": "User",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"avatar\": \"avatars/gMmrxFeNWFYfGtzJtSP305pJSrgpnAizNM2XgiEO.jpeg\",\n            \"confirmed\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "User",
    "name": "UpdateUser",
    "type": "put",
    "url": "/v1/user/{id}",
    "title": "Update User",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User (Admin | Owner)"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "first_name",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "last_name",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": false,
            "field": "avatar",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "gender",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "birth",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "province",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "city",
            "description": "<p>(optional)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/UpdateUser.v1.private.php",
    "groupTitle": "User",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"avatar\": \"avatars/gMmrxFeNWFYfGtzJtSP305pJSrgpnAizNM2XgiEO.jpeg\",\n            \"confirmed\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "User",
    "name": "findUserByEmail",
    "type": "GET",
    "url": "/v1/user/email/{email}",
    "title": "Find User by Email",
    "description": "<p>Find user by given email</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Found user\",\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"avatar\": \"avatars/gMmrxFeNWFYfGtzJtSP305pJSrgpnAizNM2XgiEO.jpeg\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        }\n    },\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/FindUserByEmail.v1.private.php",
    "groupTitle": "User"
  },
  {
    "group": "User",
    "name": "findUserById",
    "type": "get",
    "url": "/v1/user/{id}",
    "title": "Find User",
    "description": "<p>Find a user by its ID</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/FindUserById.v1.private.php",
    "groupTitle": "User",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"avatar\": \"avatars/gMmrxFeNWFYfGtzJtSP305pJSrgpnAizNM2XgiEO.jpeg\",\n            \"confirmed\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "User",
    "name": "registerUser",
    "type": "post",
    "url": "/v1/register",
    "title": "Register User (create client)",
    "description": "<p>Register user as (client).</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>(required) required|email|max:40|unique:users</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>(required) required|min:6|max:30</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "first_name",
            "description": "<p>(required) required|min:2|max:50</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "last_name",
            "description": "<p>(required) required|min:2|max:50</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "gender",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "birth",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "province",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "city",
            "description": "<p>(optional)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/RegisterUser.v1.private.php",
    "groupTitle": "User",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"avatar\": \"avatars/gMmrxFeNWFYfGtzJtSP305pJSrgpnAizNM2XgiEO.jpeg\",\n            \"confirmed\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "wepay",
    "name": "createWepayAccount",
    "type": "post",
    "url": "/v1/user/payments/accounts/wepay",
    "title": "Create wepay Account",
    "description": "<p>Before calling this endpoint make sure to call wepay first and get the <code>customer_id</code>. You may use &quot;Wepay Checkout&quot; or &quot;wepay.js&quot; to make your Wepay call. This Information will be used to charge the User whenever he to purchase anything on the platform.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "type",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "imageUrl",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "gaqDomains",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "mcc",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "country",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "currencies",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nickname",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n   \"message\":\"wepay account created successfully.\",\n   \"wepay_account_id\":1\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Wepay/UI/API/Routes/CreateWepayAccount.v1.private.php",
    "groupTitle": "wepay"
  }
] });
