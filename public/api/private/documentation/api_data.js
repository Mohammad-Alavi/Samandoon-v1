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
        "name": "Authenticated User"
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
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "text",
            "optional": false,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "dateTime",
            "optional": false,
            "field": "event_date",
            "description": "<p>required | date_format:YmdHiT</p>"
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": false,
            "field": "event_photo",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Event created\",\n    \"event\": {\n        \"object\": \"Event\",\n      \"id\": \"3a8wvzlg3r7n0e4m\",\n      \"title\": \"edrarEvent\",\n      \"description\": \"lilcription\",\n      \"event_date\": {\n            \"date\": \"2015-10-13 15:04:00.000000\",\n        \"timezone_type\": 2,\n        \"timezone\": \"EST\"\n      },\n      \"photo_path\": null,\n      \"created_at\": {\n            \"date\": \"2017-06-10 03:50:39.000000\",\n        \"timezone_type\": 3,\n        \"timezone\": \"UTC\"\n      },\n      \"updated_at\": {\n            \"date\": \"2017-06-10 03:50:39.000000\",\n        \"timezone_type\": 3,\n        \"timezone\": \"UTC\"\n      },\n      \"readable_created_at\": \"1 second ago\",\n      \"readable_updated_at\": \"1 second ago\",\n      \"real_id\": 7\n    },\n    \"view_event\": {\n        \"href\": \"v1/event/7\",\n      \"method\": \"GET\"\n    }\n  },\n  \"meta\": {\n    \"include\": [],\n    \"custom\": []\n  }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Event/UI/API/Routes/CreateEvent.v1.private.php",
    "groupTitle": "Event"
  },
  {
    "group": "Event",
    "name": "DeleteEvent",
    "type": "delete",
    "url": "/v1/event/:id",
    "title": "Delete Event",
    "description": "<p>Delete an Event by ID</p>",
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
    "url": "/event/:id",
    "title": "Get Event",
    "description": "<p>Get an event by ID</p>",
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"Event\",\n    \"id\": \"3a8wvzlg3r7n0e4m\",\n    \"title\": \"edrarEvent\",\n    \"description\": \"lilcription\",\n    \"event_date\": \"2015-10-13 15:04:00\",\n    \"photo_path\": null,\n    \"created_at\": {\n        \"date\": \"2017-06-10 03:50:39.000000\",\n      \"timezone_type\": 3,\n      \"timezone\": \"UTC\"\n    },\n    \"updated_at\": {\n        \"date\": \"2017-06-10 03:50:39.000000\",\n      \"timezone_type\": 3,\n      \"timezone\": \"UTC\"\n    },\n    \"readable_created_at\": \"18 seconds ago\",\n    \"readable_updated_at\": \"18 seconds ago\",\n    \"real_id\": 7\n  },\n  \"meta\": {\n    \"include\": [],\n    \"custom\": []\n  }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Event/UI/API/Routes/GetEvent.v1.private.php",
    "groupTitle": "Event"
  },
  {
    "group": "Event",
    "name": "ListAllEvents",
    "type": "get",
    "url": "/event",
    "title": "List Events",
    "description": "<p>Lists all Events (if no query parameter is given)</p>",
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"Event\",\n    \"id\": \"3a8wvzlg3r7n0e4m\",\n    \"title\": \"edrarEvent\",\n    \"description\": \"lilcription\",\n    \"event_date\": \"2015-10-13 15:04:00\",\n    \"photo_path\": null,\n    \"created_at\": {\n        \"date\": \"2017-06-10 03:50:39.000000\",\n      \"timezone_type\": 3,\n      \"timezone\": \"UTC\"\n    },\n    \"updated_at\": {\n        \"date\": \"2017-06-10 03:50:39.000000\",\n      \"timezone_type\": 3,\n      \"timezone\": \"UTC\"\n    },\n    \"readable_created_at\": \"18 seconds ago\",\n    \"readable_updated_at\": \"18 seconds ago\",\n    \"real_id\": 7\n  },\n  \"meta\": {\n    \"include\": [],\n    \"custom\": []\n  }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Event/UI/API/Routes/ListAllEvents.v1.private.php",
    "groupTitle": "Event"
  },
  {
    "group": "Event",
    "name": "UpdateEvent",
    "type": "put",
    "url": "/event/:id",
    "title": "Update Event",
    "description": "<p>Update a given event</p>",
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
            "type": "string",
            "optional": false,
            "field": "title",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "text",
            "optional": false,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "dateTime",
            "optional": false,
            "field": "event_date",
            "description": "<p>required | date_format:YmdHiT</p>"
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": false,
            "field": "event_photo",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Event updated\",\n    \"event\": {\n        \"object\": \"Event\",\n      \"id\": \"3a8wvzlg3r7n0e4m\",\n      \"title\": \"Seventh Event\",\n      \"description\": \"Event number 7\",\n      \"event_date\": {\n            \"date\": \"2016-10-13 15:04:00.000000\",\n        \"timezone_type\": 2,\n        \"timezone\": \"EST\"\n      },\n      \"photo_path\": null,\n      \"created_at\": {\n            \"date\": \"2017-06-10 03:50:39.000000\",\n        \"timezone_type\": 3,\n        \"timezone\": \"UTC\"\n      },\n      \"updated_at\": {\n            \"date\": \"2017-06-10 04:13:05.000000\",\n        \"timezone_type\": 3,\n        \"timezone\": \"UTC\"\n      },\n      \"readable_created_at\": \"22 minutes ago\",\n      \"readable_updated_at\": \"1 second ago\",\n      \"real_id\": 7\n    },\n    \"view_event\": {\n        \"href\": \"v1/event/7\",\n      \"method\": \"GET\"\n    }\n  },\n  \"meta\": {\n    \"include\": [],\n    \"custom\": []\n  }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Event/UI/API/Routes/UpdateEvent.v1.private.php",
    "groupTitle": "Event"
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
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\"\n}",
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
    "description": "<p>Refresh access token based on refreshToken http cookie.</p>",
    "version": "1.0.0",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\"\n}",
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
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\": \"User\",\n      \"id\": \"eqwja3vw94kzmxr0\",\n      \"name\": \"Mahmoud Zalt\",\n      \"email\": \"x.rolllln@hotmail.com\",\n      \"confirmed\": \"0\",\n      \"gender\": \"male\",\n      \"birth\": null,\n      \"social_provider\": null,\n      \"social_nickname\": null,\n      \"social_id\": null,\n      \"social_avatar\": {\n         \"avatar\": null,\n         \"original\": null\n      },\n      \"device\": \"galaxy note 10.1 n8000\",\n      \"platform\": \"android\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"real_id\": 3,\n      \"deleted_at\": null\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
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
    "name": "listAllPermissions",
    "type": "get",
    "url": "/v1/permissions",
    "title": "List all Permission",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/ListAllPermissions.v1.private.php",
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
    "name": "listAllRoles",
    "type": "get",
    "url": "/v1/roles",
    "title": "List all Roles",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/ListAllRoles.v1.private.php",
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
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\": \"User\",\n      \"id\": \"eqwja3vw94kzmxr0\",\n      \"name\": \"Mahmoud Zalt\",\n      \"email\": \"x.rolllln@hotmail.com\",\n      \"confirmed\": \"0\",\n      \"gender\": \"male\",\n      \"birth\": null,\n      \"social_provider\": null,\n      \"social_nickname\": null,\n      \"social_id\": null,\n      \"social_avatar\": {\n         \"avatar\": null,\n         \"original\": null\n      },\n      \"device\": \"galaxy note 10.1 n8000\",\n      \"platform\": \"android\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"real_id\": 3,\n      \"deleted_at\": null\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
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
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\": \"User\",\n      \"id\": \"eqwja3vw94kzmxr0\",\n      \"name\": \"Mahmoud Zalt\",\n      \"email\": \"x.rolllln@hotmail.com\",\n      \"confirmed\": \"0\",\n      \"gender\": \"male\",\n      \"birth\": null,\n      \"social_provider\": null,\n      \"social_nickname\": null,\n      \"social_id\": null,\n      \"social_avatar\": {\n         \"avatar\": null,\n         \"original\": null\n      },\n      \"device\": \"galaxy note 10.1 n8000\",\n      \"platform\": \"android\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"real_id\": 3,\n      \"deleted_at\": null\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "SocialAuth",
    "name": "socialAuthFb",
    "type": "post",
    "url": "/v1/auth/facebook",
    "title": "",
    "description": "<p>After getting the User Token from facebook, call this Endpoint passing the user token to it in order to fetch his data and create the user in our database if not exist or return the existing one. For testing purposes use this endpoint <code>auth/facebook/test</code> to get the code/token.</p>",
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
            "field": "access_token",
            "description": "<p>access_token=41EAAJyuLl3gaUBAPN6BrVIO.. (required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": {\n    \"id\": 1,\n    \"name\": \"Mahmoud Zalt\",\n    \"points\": 0,\n    \"email\": \"mahmoud@zalt.me\",\n    \"confirmed\": 0,\n    \"token\": {\n      \"object\": \"token\",\n      \"token\": \"eyJ0eXAxOiJKV1QcLCJhbGciO2JIUzI1NiJz...\"\n      \"access_token\": {\n        \"token_type\": \"Bearer\",\n        \"time_to_live\": {\n          \"minutes\": 60\n        },\n        \"expires_in\": {\n          \"date\": \"2017-02-10 23:43:41.668135\",\n          \"timezone_type\": 3,\n          \"timezone\": \"UTC\"\n        }\n      }\n    },\n    \"referral_code\": \"57aa0b88ab334\",\n    \"gender\": \"male\",\n    \"birth\": \"null\",\n    \"nickname\": \"MEGA\",\n    \"social_auth_provider\": \"facebook\",\n    \"social_id\": \"88208885713788888\",\n    \"social_avatar\": {\n        \"avatar\": \"https://graph.facebook.com/v2.6/88208885713788888/picture?type=normal\",\n        \"original\": \"https://graph.facebook.com/v2.6/88208885713788888/picture?width=1920\"\n    },\n    \"created_at\": {\n      \"date\": \"2016-08-09 16:57:44.000000\",\n      \"timezone_type\": 3,\n      \"timezone\": \"UTC\"\n    },\n    \"updated_at\": {\n      \"date\": \"2016-08-09 16:59:04.000000\",\n      \"timezone_type\": 3,\n      \"timezone\": \"UTC\"\n    }\n  }\n}",
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
    "description": "<p>After getting the User Token from twitter, call this Endpoint passing the user token to it in order to fetch his data and create the user in our database if not exist or return the existing one. For testing purposes use this endpoint <code>auth/twitter/test</code> to get the code/token.</p>",
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
            "description": "<p>?oauth_token=FeUoXZRIThimLxKjg6HqyzELREJr103L (required)</p>"
          },
          {
            "group": "Parameter",
            "optional": false,
            "field": "oauth_verifier",
            "description": "<p>?oauth_verifier=144hi333mLxKjg6HqyzELRE13LxYz (required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": {\n    \"id\": 1,\n    \"name\": \"Mahmoud Zalt\",\n    \"points\": 0,\n    \"email\": \"mahmoud@zalt.me\",\n    \"confirmed\": 0,\n    \"token\": {\n      \"object\": \"token\",\n      \"token\": \"eyJ0eXAxOiJKV1QcLCJhbGciO2JIUzI1NiJz...\"\n      \"access_token\": {\n        \"token_type\": \"Bearer\",\n        \"time_to_live\": {\n          \"minutes\": 60\n        },\n        \"expires_in\": {\n          \"date\": \"2017-02-10 23:43:41.668135\",\n          \"timezone_type\": 3,\n          \"timezone\": \"UTC\"\n        }\n      }\n    },\n    \"referral_code\": \"57aa0b88ab334\",\n    \"gender\": \"male\",\n    \"birth\": \"null\",\n    \"nickname\": \"MEGA\",\n    \"social_auth_provider\": \"twitter\",\n    \"social_id\": \"5713788888\",\n    \"social_avatar\": {\n        \"avatar\": \"https://graph.twitter.com/v2.6/88208885713788888/picture?type=normal\",\n        \"original\": \"https://graph.twitter.com/v2.6/88208885713788888/picture?width=1920\"\n    },\n    \"created_at\": {\n      \"date\": \"2016-08-09 16:57:44.000000\",\n      \"timezone_type\": 3,\n      \"timezone\": \"UTC\"\n    },\n    \"updated_at\": {\n      \"date\": \"2016-08-09 16:59:04.000000\",\n      \"timezone_type\": 3,\n      \"timezone\": \"UTC\"\n    }\n  }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Socialauth/UI/API/Routes/AuthenticateAll.v1.private.php",
    "groupTitle": "SocialAuth"
  },
  {
    "group": "Stripe",
    "name": "createStripeAccount",
    "type": "post",
    "url": "/v1/stripes",
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
            "optional": false,
            "field": "customer_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "optional": false,
            "field": "card_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "optional": false,
            "field": "card_funding",
            "description": ""
          },
          {
            "group": "Parameter",
            "optional": false,
            "field": "card_last_digits",
            "description": ""
          },
          {
            "group": "Parameter",
            "optional": false,
            "field": "card_fingerprint",
            "description": ""
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
    "group": "Users",
    "name": "CreateAdmin",
    "type": "post",
    "url": "/v1/admins",
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
            "field": "name",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/CreateAdmin.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\": \"User\",\n      \"id\": \"eqwja3vw94kzmxr0\",\n      \"name\": \"Mahmoud Zalt\",\n      \"email\": \"x.rolllln@hotmail.com\",\n      \"confirmed\": \"0\",\n      \"gender\": \"male\",\n      \"birth\": null,\n      \"social_provider\": null,\n      \"social_nickname\": null,\n      \"social_id\": null,\n      \"social_avatar\": {\n         \"avatar\": null,\n         \"original\": null\n      },\n      \"device\": \"galaxy note 10.1 n8000\",\n      \"platform\": \"android\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"real_id\": 3,\n      \"deleted_at\": null\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "DeleteUser",
    "type": "delete",
    "url": "/v1/users/:id",
    "title": "Delete User (admin, client..)",
    "description": "<p>Delete Users of any type (Admin, Client,...)</p>",
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
          "content": "HTTP/1.1 202 OK\n{\n    \"message\": \"User (4) Deleted Successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/DeleteUser.v1.private.php",
    "groupTitle": "Users"
  },
  {
    "group": "Users",
    "name": "GetAuthenticatedUser",
    "type": "get",
    "url": "/v1/userinfo",
    "title": "Get Authenticated User without specifying it's ID",
    "description": "<p>Get the current authenticated user object.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAuthenticatedUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\": \"User\",\n      \"id\": \"eqwja3vw94kzmxr0\",\n      \"name\": \"Mahmoud Zalt\",\n      \"email\": \"x.rolllln@hotmail.com\",\n      \"confirmed\": \"0\",\n      \"gender\": \"male\",\n      \"birth\": null,\n      \"social_provider\": null,\n      \"social_nickname\": null,\n      \"social_id\": null,\n      \"social_avatar\": {\n         \"avatar\": null,\n         \"original\": null\n      },\n      \"device\": \"galaxy note 10.1 n8000\",\n      \"platform\": \"android\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"real_id\": 3,\n      \"deleted_at\": null\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "ListAllAdmins",
    "type": "get",
    "url": "/v1/admins",
    "title": "List Admin Users",
    "description": "<p>List all Users where role <code>Admin</code>. You can search for Users by email, name and ID. Example: <code>?search=Mahmoud</code> or <code>?search=whatever@mail.com</code>. You can specify the field as follow <code>?search=email:whatever@mail.com</code> or <code>?search=id:20</code>. You can search by multiple fields as follow: <code>?search=name:Mahmoud&amp;email:whatever@mail.com</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated Admin"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/ListAllAdmins.v1.private.php",
    "groupTitle": "Users",
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
    "group": "Users",
    "name": "ListAllClients",
    "type": "get",
    "url": "/v1/clients",
    "title": "List Client Users",
    "description": "<p>List all Users where role <code>Client</code>. You can search for Users by email, name and ID. Example: <code>?search=Mahmoud</code> or <code>?search=whatever@mail.com</code>. You can specify the field as follow <code>?search=email:whatever@mail.com</code> or <code>?search=id:20</code>. You can search by multiple fields as follow: <code>?search=name:Mahmoud&amp;email:whatever@mail.com</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/ListAllClients.v1.private.php",
    "groupTitle": "Users",
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
    "group": "Users",
    "name": "ListAllUsers",
    "type": "get",
    "url": "/v1/users",
    "title": "List All Users",
    "description": "<p>List all Application Users (clients and admins). For all registered users &quot;Clients&quot; only you can use <code>/clients</code>. And for all &quot;Admins&quot; only you can use <code>/admins</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/ListAllUsers.v1.private.php",
    "groupTitle": "Users",
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
    "group": "Users",
    "name": "UpdateUser",
    "type": "put",
    "url": "/v1/users/:id",
    "title": "Update User",
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
            "field": "name",
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
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "device",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "platform",
            "description": "<p>(optional) in:android,ios,web,desktop</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/UpdateUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\": \"User\",\n      \"id\": \"eqwja3vw94kzmxr0\",\n      \"name\": \"Mahmoud Zalt\",\n      \"email\": \"x.rolllln@hotmail.com\",\n      \"confirmed\": \"0\",\n      \"gender\": \"male\",\n      \"birth\": null,\n      \"social_provider\": null,\n      \"social_nickname\": null,\n      \"social_id\": null,\n      \"social_avatar\": {\n         \"avatar\": null,\n         \"original\": null\n      },\n      \"device\": \"galaxy note 10.1 n8000\",\n      \"platform\": \"android\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"real_id\": 3,\n      \"deleted_at\": null\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "getUser",
    "type": "get",
    "url": "/v1/users/:id",
    "title": "Get User",
    "description": "<p>Find a user by its ID</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\": \"User\",\n      \"id\": \"eqwja3vw94kzmxr0\",\n      \"name\": \"Mahmoud Zalt\",\n      \"email\": \"x.rolllln@hotmail.com\",\n      \"confirmed\": \"0\",\n      \"gender\": \"male\",\n      \"birth\": null,\n      \"social_provider\": null,\n      \"social_nickname\": null,\n      \"social_id\": null,\n      \"social_avatar\": {\n         \"avatar\": null,\n         \"original\": null\n      },\n      \"device\": \"galaxy note 10.1 n8000\",\n      \"platform\": \"android\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"real_id\": 3,\n      \"deleted_at\": null\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "registerUser",
    "type": "post",
    "url": "/v1/register",
    "title": "Register User (create client)",
    "description": "<p>Register users as (client).</p>",
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
            "field": "name",
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
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "device",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "platform",
            "description": "<p>(optional)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/RegisterUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\": \"User\",\n      \"id\": \"eqwja3vw94kzmxr0\",\n      \"name\": \"Mahmoud Zalt\",\n      \"email\": \"x.rolllln@hotmail.com\",\n      \"confirmed\": \"0\",\n      \"gender\": \"male\",\n      \"birth\": null,\n      \"social_provider\": null,\n      \"social_nickname\": null,\n      \"social_id\": null,\n      \"social_avatar\": {\n         \"avatar\": null,\n         \"original\": null\n      },\n      \"device\": \"galaxy note 10.1 n8000\",\n      \"platform\": \"android\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"real_id\": 3,\n      \"deleted_at\": null\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  }
] });
