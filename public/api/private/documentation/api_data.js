define({ "api": [
  {
    "group": "Admin",
    "name": "getAllVerificationRequests",
    "type": "GET",
    "url": "/v1/ngo/kyc/verification/requests",
    "title": "KYC: Get All verification requests",
    "description": "<p>Get All verification requests sent by da users</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated | Admin"
      }
    ],
    "filename": "app/Containers/NGO/UI/API/Routes/GetAllVerificationRequests.v1.private.php",
    "groupTitle": "Admin",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"NGO Updated\",\n        \"object\": {\n            \"object\": \"NGO\",\n            \"id\": \"kjeonp5eordqzvb8\",\n            \"name\": \"انجمن محلی جهانشهر حاجی آباد سابق\",\n            \"public_name\": \"9yrj4on3qmvdgrao\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": \"----\"\n            },\n            \"status\": \"ابطال شده\",\n            \"subject\": [\n                {\n                    \"id\": 1,\n                    \"subject\": \"علمی\"\n                },\n                {\n                    \"id\": 3,\n                    \"subject\": \"اجتماعی\"\n                }\n            ],\n            \"phone\": [\n                {\n                    \"id\": 1,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                },\n                    {\n                    \"id\": 2,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                }\n            ]\n            \"zip_code\": \"6316713649\",\n            \"type\": \"شركت تعاوني\",\n            \"verification_status\": \"requested\",\n            \"verification_admin_id\": \"3mjzyg5dp5a0vwp6\",\n            \"images\": {\n                \"ngo_logo\": \"http://api.samandoon.local/v1/storage/2/pepeWallpepeR.jpg\",\n                \"ngo_logo_thumb\": \"http://api.samandoon.local/v1/storage/2/conversions/thumb.jpg\",\n                \"ngo_banner\": \"http://api.samandoon.local/v1/storage/3/Sketch%20%281%29.png\",\n                \"ngo_banner_thumb\": \"http://api.samandoon.local/v1/storage/3/conversions/thumb.png\"\n            },\n            \"user_id\": \"3mjzyg5dp5a0vwp6\",\n            \"registration_specification\": {\n                \"national_number\": \"10100000010\",\n                \"registration_number\": \"13\",\n                \"registration_date\": \"1345/12/25\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-07 19:40:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-07 20:20:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"40 minutes ago\",\n            \"readable_updated_at\": \"1 second ago\",\n            \"view_ngo\": {\n                \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                \"method\": \"GET\"\n            },\n            \"stats\": {\n                \"is_following\": false,\n                \"followers_count\": 1,\n                \"article_count\": 6,\n                \"event_count\": 17\n            }\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"user\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Admin",
    "name": "kycNgoAdminVerification",
    "type": "PUT",
    "url": "/v1/ngo/{ngo_id}/kyc",
    "title": "KYC: NGO Verification",
    "description": "<p>KYC NGO Verification by Admin</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authorized | Admin"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "allowedValues": [
              "\"requested\"",
              "\"unverified\"",
              "\"in_progress\"",
              "\"verified\""
            ],
            "optional": false,
            "field": "judgment",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/NGO/UI/API/Routes/KYCNgoAdminVerification.v1.private.php",
    "groupTitle": "Admin",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"NGO Updated\",\n        \"object\": {\n            \"object\": \"NGO\",\n            \"id\": \"kjeonp5eordqzvb8\",\n            \"name\": \"انجمن محلی جهانشهر حاجی آباد سابق\",\n            \"public_name\": \"9yrj4on3qmvdgrao\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": \"----\"\n            },\n            \"status\": \"ابطال شده\",\n            \"subject\": [\n                {\n                    \"id\": 1,\n                    \"subject\": \"علمی\"\n                },\n                {\n                    \"id\": 3,\n                    \"subject\": \"اجتماعی\"\n                }\n            ],\n            \"phone\": [\n                {\n                    \"id\": 1,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                },\n                    {\n                    \"id\": 2,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                }\n            ]\n            \"zip_code\": \"6316713649\",\n            \"type\": \"شركت تعاوني\",\n            \"verification_status\": \"requested\",\n            \"verification_admin_id\": \"3mjzyg5dp5a0vwp6\",\n            \"images\": {\n                \"ngo_logo\": \"http://api.samandoon.local/v1/storage/2/pepeWallpepeR.jpg\",\n                \"ngo_logo_thumb\": \"http://api.samandoon.local/v1/storage/2/conversions/thumb.jpg\",\n                \"ngo_banner\": \"http://api.samandoon.local/v1/storage/3/Sketch%20%281%29.png\",\n                \"ngo_banner_thumb\": \"http://api.samandoon.local/v1/storage/3/conversions/thumb.png\"\n            },\n            \"user_id\": \"3mjzyg5dp5a0vwp6\",\n            \"registration_specification\": {\n                \"national_number\": \"10100000010\",\n                \"registration_number\": \"13\",\n                \"registration_date\": \"1345/12/25\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-07 19:40:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-07 20:20:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"40 minutes ago\",\n            \"readable_updated_at\": \"1 second ago\",\n            \"view_ngo\": {\n                \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                \"method\": \"GET\"\n            },\n            \"stats\": {\n                \"is_following\": false,\n                \"followers_count\": 1,\n                \"article_count\": 6,\n                \"event_count\": 17\n            }\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"user\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Admin",
    "name": "kycPhotoAdminVerification",
    "type": "PUT",
    "url": "/v1/ngo/kyc/photo/{photo_id}",
    "title": "KYC: Photo Verification",
    "description": "<p>KYC Photo Verification by Admin</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated | Admin"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "allowedValues": [
              "\"invalid\"",
              "\"verified\"",
              "\"sent\""
            ],
            "optional": false,
            "field": "judgment",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "text",
            "optional": false,
            "field": "text",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/NGO/UI/API/Routes/KYCPhotoAdminVerification.v1.private.php",
    "groupTitle": "Admin",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"KYCPhoto\",\n        \"msg\": \"Media created\",\n        \"id\": \"kjeonp5eordqzvb8\",\n        \"file_name\": \"be6d4192b9e2e3a87a321a0eb52f49a9\",\n        \"image\": \"http://api.samandoon.local/v1/storage/1/be6d4192b9e2e3a87a321a0eb52f49a9.png\",\n        \"label\": \"national_card_side_two\",\n        \"status\": \"sent\",\n        \"text\": null,\n        \"ngo_id\": \"kjeonp5eordqzvb8\",\n        \"admin_id\": \"kjeonp5eordqzvb8\"\n    },\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Article",
    "name": "createArticle",
    "type": "POST",
    "url": "/v1/ngo/article",
    "title": "Create Article",
    "description": "<p>Create an article</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "title",
            "optional": false,
            "field": "string",
            "description": "<p>(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "text",
            "optional": false,
            "field": "text",
            "description": "<p>(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": false,
            "field": "article_image",
            "description": "<p>(required)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Article/UI/API/Routes/CreateArticle.v1.private.php",
    "groupTitle": "Article",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n        \"object\": \"Article\",\n            \"id\": \"3mjzyg5dp5a0vwp6\",\n            \"title\": \"Article title\",\n            \"text\": \"Some random texts and description for nealy created Article\",\n            \"image\": {\n                \"article_image\": \"http://api.samandoon.local/v1/storage/8/pepeWallpepeR.jpg\",\n                \"article_image_thumb\": \"http://api.samandoon.local/v1/storage/8/conversions/thumb.jpg\"\n            },\n            \"ngo_id\": \"kjeonp5eordqzvb8\",\n            \"created_at\": {\n            \"date\": \"2017-12-11 10:00:19.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-12-11 10:00:19.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"like_count\": 2,\n            \"seen_count\": 1,\n            \"view_article\": {\n            \"href\": \"v1/ngo/article/3mjzyg5dp5a0vwp6\",\n                \"method\": \"GET\"\n            }\n        },\n        \"NGO\": {\n        \"data\": {\n            \"msg\": null,\n                \"object\": {\n                \"object\": \"NGO\",\n                    \"id\": \"kjeonp5eordqzvb8\",\n                    \"name\": \"مهرگان كرشته\",\n                    \"description\": null,\n                    \"subjects\": [],\n                    \"area_of_activity\": null,\n                    \"address\": \"----\",\n                    \"zip_code\": \"0\",\n                    \"type\": \"شركت سهامي خاص\",\n                    \"confirmed\": false,\n                    \"logo_photo\": \"\",\n                    \"banner_photo\": \"\",\n                    \"user_id\": \"3mjzyg5dp5a0vwp6\",\n                    \"Registration specification\": {\n                    \"national_number\": \"10100000006\",\n                        \"registration_number\": \"17\",\n                        \"registration_date\": \"1350/01/23\",\n                        \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n                    },\n                    \"view_ngo\": {\n                    \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                        \"method\": \"GET\"\n                    }\n                }\n            }\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"ngo\",\n        \"user\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Article",
    "name": "createComment",
    "type": "POST",
    "url": "/v1/ngo/article/{id}/comment",
    "title": "Create Comment",
    "description": "<p>Create a comment on the Article</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Text",
            "optional": false,
            "field": "body",
            "description": "<p>Comment body</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "parent_id",
            "description": "<p>Comment's parent ID (e.g. an answer/replay)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Article/UI/API/Routes/CreateComment.v1.private.php",
    "groupTitle": "Article",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": {\n            \"object\": \"Comment\",\n                \"id\": \"9knz73rywnlpdx0v\",\n                \"body\": \"ناموسن سومین کامنت نرینه صلوات!\",\n                \"commentable_id\": \"a0dg7o53grq4m3pn\",\n                \"commentable_type\": \"Article\",\n                \"creator_id\": \"3mjzyg5dp5a0vwp6\",\n                \"creator_type\": \"User\",\n                \"creator_data\": {\n                    \"first_name\": \"Mohammad\",\n                    \"last_name\": \"Alavi\",\n                    \"images\": {\n                        \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/1/conversions/thumb.jpg\"\n                    },\n                    \"ngo_data\": {\n                        \"ngo_id\": \"kjeonp5eordqzvb8\",\n                        \"name\": \"روستائي راشته\",\n                        \"public_name\": \"hamta\",\n                        \"confirmed\": false\n                    }\n                },\n                \"_lft\": 36,\n                \"_rgt\": 37,\n                \"parent_id\": \"dxwgmb50mrk340yo\",\n                \"created_at\": {\n                \"date\": \"2018-03-02 03:46:14.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"updated_at\": {\n                \"date\": \"2018-03-02 03:46:14.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"commented_on_ngo_id\": \"kjeonp5eordqzvb8\",\n                \"view_comment\": {\n                \"href\": \"v1/ngo/article/comment/9knz73rywnlpdx0v\",\n                    \"method\": \"GET\"\n                }\n            }\n        }\n    ],\n    \"meta\": {\n    \"pagination\": {\n        \"per_page\": null,\n            \"current_page\": null,\n            \"total_pages\": null\n        }\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Article",
    "name": "deleteArticle",
    "type": "DELETE",
    "url": "/v1/ngo/article/{id}",
    "title": "Delete Article",
    "description": "<p>Delete an Article</p>",
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
          "content": "HTTP/1.1 204 No Content\n{\n\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Article/UI/API/Routes/DeleteArticle.v1.private.php",
    "groupTitle": "Article"
  },
  {
    "group": "Article",
    "name": "deleteComment",
    "type": "DELETE",
    "url": "/v1/ngo/article/{id}/comment/{comment_id}",
    "title": "Delete Comment",
    "description": "<p>Delete the specified comment</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated -> Owner/Admin"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 204 No Content\n{\n\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Article/UI/API/Routes/DeleteComment.v1.private.php",
    "groupTitle": "Article"
  },
  {
    "group": "Article",
    "name": "getAllComments",
    "type": "GET",
    "url": "/v1/ngo/article/{id}/comment",
    "title": "Get All Comments",
    "description": "<p>Get all comments of the specified article</p>",
    "version": "1.0.0",
    "examples": [
      {
        "title": "Example usage:",
        "content": "api.samandoon.ngo/v1/ngo/article/kjeonp5eordqzvb8/comment?orderBy=created_at&sortedBy=desc",
        "type": "url"
      }
    ],
    "filename": "app/Containers/Article/UI/API/Routes/GetAllComments.v1.private.php",
    "groupTitle": "Article",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": {\n            \"object\": \"Comment\",\n                \"id\": \"9knz73rywnlpdx0v\",\n                \"body\": \"ناموسن سومین کامنت نرینه صلوات!\",\n                \"commentable_id\": \"a0dg7o53grq4m3pn\",\n                \"commentable_type\": \"Article\",\n                \"creator_id\": \"3mjzyg5dp5a0vwp6\",\n                \"creator_type\": \"User\",\n                \"creator_data\": {\n                    \"first_name\": \"Mohammad\",\n                    \"last_name\": \"Alavi\",\n                    \"images\": {\n                        \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/1/conversions/thumb.jpg\"\n                    },\n                    \"ngo_data\": {\n                        \"ngo_id\": \"kjeonp5eordqzvb8\",\n                        \"name\": \"روستائي راشته\",\n                        \"public_name\": \"hamta\",\n                        \"confirmed\": false\n                    }\n                },\n                \"_lft\": 36,\n                \"_rgt\": 37,\n                \"parent_id\": \"dxwgmb50mrk340yo\",\n                \"created_at\": {\n                \"date\": \"2018-03-02 03:46:14.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"updated_at\": {\n                \"date\": \"2018-03-02 03:46:14.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"commented_on_ngo_id\": \"kjeonp5eordqzvb8\",\n                \"view_comment\": {\n                \"href\": \"v1/ngo/article/comment/9knz73rywnlpdx0v\",\n                    \"method\": \"GET\"\n                }\n            }\n        }\n    ],\n    \"meta\": {\n    \"pagination\": {\n        \"per_page\": null,\n            \"current_page\": null,\n            \"total_pages\": null\n        }\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Article",
    "name": "getArticle",
    "type": "GET",
    "url": "/v1/ngo/article/{id}",
    "title": "Find Article by id",
    "description": "<p>Find an Article by id</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "app/Containers/Article/UI/API/Routes/GetArticle.v1.private.php",
    "groupTitle": "Article",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n        \"object\": \"Article\",\n            \"id\": \"3mjzyg5dp5a0vwp6\",\n            \"title\": \"Article title\",\n            \"text\": \"Some random texts and description for nealy created Article\",\n            \"image\": {\n                \"article_image\": \"http://api.samandoon.local/v1/storage/8/pepeWallpepeR.jpg\",\n                \"article_image_thumb\": \"http://api.samandoon.local/v1/storage/8/conversions/thumb.jpg\"\n            },\n            \"ngo_id\": \"kjeonp5eordqzvb8\",\n            \"created_at\": {\n            \"date\": \"2017-12-11 10:00:19.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-12-11 10:00:19.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"like_count\": 2,\n            \"seen_count\": 1,\n            \"view_article\": {\n            \"href\": \"v1/ngo/article/3mjzyg5dp5a0vwp6\",\n                \"method\": \"GET\"\n            }\n        },\n        \"NGO\": {\n        \"data\": {\n            \"msg\": null,\n                \"object\": {\n                \"object\": \"NGO\",\n                    \"id\": \"kjeonp5eordqzvb8\",\n                    \"name\": \"مهرگان كرشته\",\n                    \"description\": null,\n                    \"subjects\": [],\n                    \"area_of_activity\": null,\n                    \"address\": \"----\",\n                    \"zip_code\": \"0\",\n                    \"type\": \"شركت سهامي خاص\",\n                    \"confirmed\": false,\n                    \"logo_photo\": \"\",\n                    \"banner_photo\": \"\",\n                    \"user_id\": \"3mjzyg5dp5a0vwp6\",\n                    \"Registration specification\": {\n                    \"national_number\": \"10100000006\",\n                        \"registration_number\": \"17\",\n                        \"registration_date\": \"1350/01/23\",\n                        \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n                    },\n                    \"view_ngo\": {\n                    \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                        \"method\": \"GET\"\n                    }\n                }\n            }\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"ngo\",\n        \"user\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Article",
    "name": "getComment",
    "type": "GET",
    "url": "/v1/ngo/article/{id}/comment/{comment_id}",
    "title": "Get Comment",
    "description": "<p>Get a single comment of the specified article</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "app/Containers/Article/UI/API/Routes/GetComment.v1.private.php",
    "groupTitle": "Article",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": {\n            \"object\": \"Comment\",\n                \"id\": \"9knz73rywnlpdx0v\",\n                \"body\": \"ناموسن سومین کامنت نرینه صلوات!\",\n                \"commentable_id\": \"a0dg7o53grq4m3pn\",\n                \"commentable_type\": \"Article\",\n                \"creator_id\": \"3mjzyg5dp5a0vwp6\",\n                \"creator_type\": \"User\",\n                \"creator_data\": {\n                    \"first_name\": \"Mohammad\",\n                    \"last_name\": \"Alavi\",\n                    \"images\": {\n                        \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/1/conversions/thumb.jpg\"\n                    },\n                    \"ngo_data\": {\n                        \"ngo_id\": \"kjeonp5eordqzvb8\",\n                        \"name\": \"روستائي راشته\",\n                        \"public_name\": \"hamta\",\n                        \"confirmed\": false\n                    }\n                },\n                \"_lft\": 36,\n                \"_rgt\": 37,\n                \"parent_id\": \"dxwgmb50mrk340yo\",\n                \"created_at\": {\n                \"date\": \"2018-03-02 03:46:14.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"updated_at\": {\n                \"date\": \"2018-03-02 03:46:14.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"commented_on_ngo_id\": \"kjeonp5eordqzvb8\",\n                \"view_comment\": {\n                \"href\": \"v1/ngo/article/comment/9knz73rywnlpdx0v\",\n                    \"method\": \"GET\"\n                }\n            }\n        }\n    ],\n    \"meta\": {\n    \"pagination\": {\n        \"per_page\": null,\n            \"current_page\": null,\n            \"total_pages\": null\n        }\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Article",
    "name": "getLikers",
    "type": "GET",
    "url": "/v1/ngo/article/{article_id}/likers",
    "title": "Get Likers",
    "description": "<p>Get the likers of the specified article</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "examples": [
      {
        "title": "Example usage:",
        "content": "api.samandoon.ngo/v1/ngo/article/kjeonp5eordqzvb8/likers?orderBy=created_at&sortedBy=desc",
        "type": "url"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"User\",\n                \"id\": \"3mjzyg5dp5a0vwp6\",\n                \"first_name\": \"Mohammad\",\n                \"last_name\": \"Alavi\",\n                \"email\": \"m.alavi1989@gmail.com\",\n                \"images\": {\n                    \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/1/conversions/thumb.jpg\"\n                },\n                \"confirmed\": false,\n                \"gender\": null,\n                \"birth\": null,\n                \"ngo_id\": \"kjeonp5eordqzvb8\",\n                \"view_user\": {\n                \"href\": \"v1/user/3mjzyg5dp5a0vwp6\",\n                    \"method\": \"GET\"\n                }\n        },\n        {\n            \"object\": \"User\",\n                \"id\": \"qv4jdwrw0lanm6xg\",\n                \"first_name\": \"Mohammad\",\n                \"last_name\": \"Alavi\",\n                \"email\": \"m.alavi1992@gmail.com\",\n                \"images\": {\n                    \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/1/conversions/thumb.jpg\"\n                },\n                \"confirmed\": false,\n                \"gender\": null,\n                \"birth\": null,\n                \"ngo_id\": \"qv4jdwrw0lanm6xg\",\n                \"view_user\": {\n                \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n                    \"method\": \"GET\"\n                }\n        }\n    ],\n    \"meta\": {\n    \"pagination\": {\n        \"per_page\": 10,\n            \"current_page\": 1,\n            \"total_pages\": 1\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Article/UI/API/Routes/GetLikers.v1.private.php",
    "groupTitle": "Article"
  },
  {
    "group": "Article",
    "name": "listAllArticles",
    "type": "GET",
    "url": "/v1/ngo/article",
    "title": "List all Articles",
    "description": "<p>Lists all Articles (if no query parameter is given)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "examples": [
      {
        "title": "Example usage:",
        "content": "api.samandoon.ngo/v1/ngo/article?filter=title;created_at&orderBy=title&sortedBy=asc&field=title&value=v&ngo_id=3mjzyg5dp5a0vwp6",
        "type": "url"
      }
    ],
    "filename": "app/Containers/Article/UI/API/Routes/ListAllArticles.v1.private.php",
    "groupTitle": "Article",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"NGO Updated\",\n        \"object\": {\n            \"object\": \"NGO\",\n            \"id\": \"kjeonp5eordqzvb8\",\n            \"name\": \"انجمن محلی جهانشهر حاجی آباد سابق\",\n            \"public_name\": \"9yrj4on3qmvdgrao\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": \"----\"\n            },\n            \"status\": \"ابطال شده\",\n            \"subject\": [\n                {\n                    \"id\": 1,\n                    \"subject\": \"علمی\"\n                },\n                {\n                    \"id\": 3,\n                    \"subject\": \"اجتماعی\"\n                }\n            ],\n            \"phone\": [\n                {\n                    \"id\": 1,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                },\n                    {\n                    \"id\": 2,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                }\n            ]\n            \"zip_code\": \"6316713649\",\n            \"type\": \"شركت تعاوني\",\n            \"verification_status\": \"requested\",\n            \"verification_admin_id\": \"3mjzyg5dp5a0vwp6\",\n            \"images\": {\n                \"ngo_logo\": \"http://api.samandoon.local/v1/storage/2/pepeWallpepeR.jpg\",\n                \"ngo_logo_thumb\": \"http://api.samandoon.local/v1/storage/2/conversions/thumb.jpg\",\n                \"ngo_banner\": \"http://api.samandoon.local/v1/storage/3/Sketch%20%281%29.png\",\n                \"ngo_banner_thumb\": \"http://api.samandoon.local/v1/storage/3/conversions/thumb.png\"\n            },\n            \"user_id\": \"3mjzyg5dp5a0vwp6\",\n            \"registration_specification\": {\n                \"national_number\": \"10100000010\",\n                \"registration_number\": \"13\",\n                \"registration_date\": \"1345/12/25\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-07 19:40:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-07 20:20:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"40 minutes ago\",\n            \"readable_updated_at\": \"1 second ago\",\n            \"view_ngo\": {\n                \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                \"method\": \"GET\"\n            },\n            \"stats\": {\n                \"is_following\": false,\n                \"followers_count\": 1,\n                \"article_count\": 6,\n                \"event_count\": 17\n            }\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"user\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Article",
    "name": "searchArticles",
    "type": "GET",
    "url": "/v1/search/ngo/article?q=",
    "title": "Search Articles",
    "description": "<p>Search the value of q parameter in articles</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "examples": [
      {
        "title": "Example usage:",
        "content": "api.samandoon.ngo/v1/search/ngo/article?q=تست",
        "type": "url"
      }
    ],
    "filename": "app/Containers/Article/UI/API/Routes/SearchArticles.v1.private.php",
    "groupTitle": "Article",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n        \"object\": \"Article\",\n            \"id\": \"3mjzyg5dp5a0vwp6\",\n            \"title\": \"Article title\",\n            \"text\": \"Some random texts and description for nealy created Article\",\n            \"image\": {\n                \"article_image\": \"http://api.samandoon.local/v1/storage/8/pepeWallpepeR.jpg\",\n                \"article_image_thumb\": \"http://api.samandoon.local/v1/storage/8/conversions/thumb.jpg\"\n            },\n            \"ngo_id\": \"kjeonp5eordqzvb8\",\n            \"created_at\": {\n            \"date\": \"2017-12-11 10:00:19.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-12-11 10:00:19.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"like_count\": 2,\n            \"seen_count\": 1,\n            \"view_article\": {\n            \"href\": \"v1/ngo/article/3mjzyg5dp5a0vwp6\",\n                \"method\": \"GET\"\n            }\n        },\n        \"NGO\": {\n        \"data\": {\n            \"msg\": null,\n                \"object\": {\n                \"object\": \"NGO\",\n                    \"id\": \"kjeonp5eordqzvb8\",\n                    \"name\": \"مهرگان كرشته\",\n                    \"description\": null,\n                    \"subjects\": [],\n                    \"area_of_activity\": null,\n                    \"address\": \"----\",\n                    \"zip_code\": \"0\",\n                    \"type\": \"شركت سهامي خاص\",\n                    \"confirmed\": false,\n                    \"logo_photo\": \"\",\n                    \"banner_photo\": \"\",\n                    \"user_id\": \"3mjzyg5dp5a0vwp6\",\n                    \"Registration specification\": {\n                    \"national_number\": \"10100000006\",\n                        \"registration_number\": \"17\",\n                        \"registration_date\": \"1350/01/23\",\n                        \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n                    },\n                    \"view_ngo\": {\n                    \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                        \"method\": \"GET\"\n                    }\n                }\n            }\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"ngo\",\n        \"user\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Article",
    "name": "updateArticle",
    "type": "PUT",
    "url": "/v1/ngo/article/{id}",
    "title": "Update Article",
    "description": "<p>Update and Article</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "text",
            "optional": false,
            "field": "text",
            "description": "<p>(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": false,
            "field": "article_image",
            "description": "<p>(optional)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Article/UI/API/Routes/UpdateArticle.v1.private.php",
    "groupTitle": "Article",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n        \"object\": \"Article\",\n            \"id\": \"3mjzyg5dp5a0vwp6\",\n            \"title\": \"Article title\",\n            \"text\": \"Some random texts and description for nealy created Article\",\n            \"image\": {\n                \"article_image\": \"http://api.samandoon.local/v1/storage/8/pepeWallpepeR.jpg\",\n                \"article_image_thumb\": \"http://api.samandoon.local/v1/storage/8/conversions/thumb.jpg\"\n            },\n            \"ngo_id\": \"kjeonp5eordqzvb8\",\n            \"created_at\": {\n            \"date\": \"2017-12-11 10:00:19.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-12-11 10:00:19.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"like_count\": 2,\n            \"seen_count\": 1,\n            \"view_article\": {\n            \"href\": \"v1/ngo/article/3mjzyg5dp5a0vwp6\",\n                \"method\": \"GET\"\n            }\n        },\n        \"NGO\": {\n        \"data\": {\n            \"msg\": null,\n                \"object\": {\n                \"object\": \"NGO\",\n                    \"id\": \"kjeonp5eordqzvb8\",\n                    \"name\": \"مهرگان كرشته\",\n                    \"description\": null,\n                    \"subjects\": [],\n                    \"area_of_activity\": null,\n                    \"address\": \"----\",\n                    \"zip_code\": \"0\",\n                    \"type\": \"شركت سهامي خاص\",\n                    \"confirmed\": false,\n                    \"logo_photo\": \"\",\n                    \"banner_photo\": \"\",\n                    \"user_id\": \"3mjzyg5dp5a0vwp6\",\n                    \"Registration specification\": {\n                    \"national_number\": \"10100000006\",\n                        \"registration_number\": \"17\",\n                        \"registration_date\": \"1350/01/23\",\n                        \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n                    },\n                    \"view_ngo\": {\n                    \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                        \"method\": \"GET\"\n                    }\n                }\n            }\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"ngo\",\n        \"user\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Article",
    "name": "updateComment",
    "type": "PUT",
    "url": "/v1/ngo/article/{id}/comment/{comment_id}",
    "title": "Update Comment",
    "description": "<p>Update the specified comment</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated -> Owner/Admin"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Text",
            "optional": false,
            "field": "body",
            "description": "<p>Comment body</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Article/UI/API/Routes/UpdateComment.v1.private.php",
    "groupTitle": "Article",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": {\n            \"object\": \"Comment\",\n                \"id\": \"9knz73rywnlpdx0v\",\n                \"body\": \"ناموسن سومین کامنت نرینه صلوات!\",\n                \"commentable_id\": \"a0dg7o53grq4m3pn\",\n                \"commentable_type\": \"Article\",\n                \"creator_id\": \"3mjzyg5dp5a0vwp6\",\n                \"creator_type\": \"User\",\n                \"creator_data\": {\n                    \"first_name\": \"Mohammad\",\n                    \"last_name\": \"Alavi\",\n                    \"images\": {\n                        \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/1/conversions/thumb.jpg\"\n                    },\n                    \"ngo_data\": {\n                        \"ngo_id\": \"kjeonp5eordqzvb8\",\n                        \"name\": \"روستائي راشته\",\n                        \"public_name\": \"hamta\",\n                        \"confirmed\": false\n                    }\n                },\n                \"_lft\": 36,\n                \"_rgt\": 37,\n                \"parent_id\": \"dxwgmb50mrk340yo\",\n                \"created_at\": {\n                \"date\": \"2018-03-02 03:46:14.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"updated_at\": {\n                \"date\": \"2018-03-02 03:46:14.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"commented_on_ngo_id\": \"kjeonp5eordqzvb8\",\n                \"view_comment\": {\n                \"href\": \"v1/ngo/article/comment/9knz73rywnlpdx0v\",\n                    \"method\": \"GET\"\n                }\n            }\n        }\n    ],\n    \"meta\": {\n    \"pagination\": {\n        \"per_page\": null,\n            \"current_page\": null,\n            \"total_pages\": null\n        }\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Event",
    "name": "CreateEvent",
    "type": "post",
    "url": "/v1/ngo/event",
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
            "description": "<p>max:255</p>"
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": false,
            "field": "event_image",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "dateTime",
            "optional": false,
            "field": "event_date",
            "description": "<p>date_format:YmdHiT</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "city",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "province",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "address",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "numeric",
            "optional": true,
            "field": "lat",
            "description": "<p>latitude</p>"
          },
          {
            "group": "Parameter",
            "type": "numeric",
            "optional": true,
            "field": "long",
            "description": "<p>longitude</p>"
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n            \"object\": \"Event\",\n            \"id\": \"oj64bp5zjl8ywzn0\",\n            \"title\": \"پشم تست\",\n            \"image\": {\n                \"event_image\": \"http://api.samandoon.local/v1/storage/7/pepeWallpepeR.jpg\",\n                \"event_image_thumb\": \"http://api.samandoon.local/v1/storage/7/conversions/thumb.jpg\"\n            },\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": null,\n                \"lat\": \"57.098554\",\n                \"long\": \"-1.822060\"\n            },\n            \"ngo_id\": \"kjeonp5eordqzvb8\",\n            \"event_date\": {\n                \"date\": \"2029-12-08 13:16:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-08 01:00:50.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-08 01:00:50.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"2 seconds ago\",\n            \"readable_updated_at\": \"2 seconds ago\"\n        },\n        \"view_event\": {\n            \"href\": \"v1/ngo/event/oj64bp5zjl8ywzn0\",\n            \"method\": \"GET\"\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"ngo\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Event",
    "name": "DeleteEvent",
    "type": "DELETE",
    "url": "/v1/ngo/event/{id}",
    "title": "Delete Event",
    "description": "<p>Delete an Event</p>",
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
          "content": "HTTP/1.1 204 No Content\n{\n\n}",
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
    "url": "/v1/ngo/event/{id}",
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n            \"object\": \"Event\",\n            \"id\": \"oj64bp5zjl8ywzn0\",\n            \"title\": \"پشم تست\",\n            \"image\": {\n                \"event_image\": \"http://api.samandoon.local/v1/storage/7/pepeWallpepeR.jpg\",\n                \"event_image_thumb\": \"http://api.samandoon.local/v1/storage/7/conversions/thumb.jpg\"\n            },\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": null,\n                \"lat\": \"57.098554\",\n                \"long\": \"-1.822060\"\n            },\n            \"ngo_id\": \"kjeonp5eordqzvb8\",\n            \"event_date\": {\n                \"date\": \"2029-12-08 13:16:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-08 01:00:50.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-08 01:00:50.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"2 seconds ago\",\n            \"readable_updated_at\": \"2 seconds ago\"\n        },\n        \"view_event\": {\n            \"href\": \"v1/ngo/event/oj64bp5zjl8ywzn0\",\n            \"method\": \"GET\"\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"ngo\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Event",
    "name": "ListAllEvents",
    "type": "get",
    "url": "/v1/ngo/event",
    "title": "List Events",
    "description": "<p>Lists all Events (if no query parameter is given)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "examples": [
      {
        "title": "Example usage:",
        "content": "api.samandoon.ngo/v1/ngo/event?filter=title;created_at&orderBy=title&sortedBy=asc&field=title&value=v&ngo_id=3mjzyg5dp5a0vwp6",
        "type": "url"
      }
    ],
    "filename": "app/Containers/Event/UI/API/Routes/ListAllEvents.v1.private.php",
    "groupTitle": "Event",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n            \"object\": \"Event\",\n            \"id\": \"oj64bp5zjl8ywzn0\",\n            \"title\": \"پشم تست\",\n            \"image\": {\n                \"event_image\": \"http://api.samandoon.local/v1/storage/7/pepeWallpepeR.jpg\",\n                \"event_image_thumb\": \"http://api.samandoon.local/v1/storage/7/conversions/thumb.jpg\"\n            },\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": null,\n                \"lat\": \"57.098554\",\n                \"long\": \"-1.822060\"\n            },\n            \"ngo_id\": \"kjeonp5eordqzvb8\",\n            \"event_date\": {\n                \"date\": \"2029-12-08 13:16:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-08 01:00:50.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-08 01:00:50.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"2 seconds ago\",\n            \"readable_updated_at\": \"2 seconds ago\"\n        },\n        \"view_event\": {\n            \"href\": \"v1/ngo/event/oj64bp5zjl8ywzn0\",\n            \"method\": \"GET\"\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"ngo\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Event",
    "name": "UpdateEvent",
    "type": "put",
    "url": "/v1/ngo/event/{id}",
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
            "optional": true,
            "field": "title",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "text",
            "optional": true,
            "field": "description",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "dateTime",
            "optional": true,
            "field": "event_date",
            "description": "<p>(optional) date_format:YmdHiT</p>"
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": true,
            "field": "event_image",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "text",
            "optional": true,
            "field": "location",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "numeric",
            "optional": true,
            "field": "lat",
            "description": "<p>latitude</p>"
          },
          {
            "group": "Parameter",
            "type": "numeric",
            "optional": true,
            "field": "long",
            "description": "<p>longitude</p>"
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n            \"object\": \"Event\",\n            \"id\": \"oj64bp5zjl8ywzn0\",\n            \"title\": \"پشم تست\",\n            \"image\": {\n                \"event_image\": \"http://api.samandoon.local/v1/storage/7/pepeWallpepeR.jpg\",\n                \"event_image_thumb\": \"http://api.samandoon.local/v1/storage/7/conversions/thumb.jpg\"\n            },\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": null,\n                \"lat\": \"57.098554\",\n                \"long\": \"-1.822060\"\n            },\n            \"ngo_id\": \"kjeonp5eordqzvb8\",\n            \"event_date\": {\n                \"date\": \"2029-12-08 13:16:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-08 01:00:50.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-08 01:00:50.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"2 seconds ago\",\n            \"readable_updated_at\": \"2 seconds ago\"\n        },\n        \"view_event\": {\n            \"href\": \"v1/ngo/event/oj64bp5zjl8ywzn0\",\n            \"method\": \"GET\"\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"ngo\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Event",
    "name": "searchEvents",
    "type": "GET",
    "url": "/v1/search/ngo/event?q=",
    "title": "Search Events",
    "description": "<p>Search the value of q parameter in events</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "examples": [
      {
        "title": "Example usage:",
        "content": "api.samandoon.ngo/v1/search/ngo/event?q=تست",
        "type": "url"
      }
    ],
    "filename": "app/Containers/Event/UI/API/Routes/SearchEvents.v1.private.php",
    "groupTitle": "Event",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"Some informative msg here or null\",\n        \"object\": {\n            \"object\": \"Event\",\n            \"id\": \"oj64bp5zjl8ywzn0\",\n            \"title\": \"پشم تست\",\n            \"image\": {\n                \"event_image\": \"http://api.samandoon.local/v1/storage/7/pepeWallpepeR.jpg\",\n                \"event_image_thumb\": \"http://api.samandoon.local/v1/storage/7/conversions/thumb.jpg\"\n            },\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": null,\n                \"lat\": \"57.098554\",\n                \"long\": \"-1.822060\"\n            },\n            \"ngo_id\": \"kjeonp5eordqzvb8\",\n            \"event_date\": {\n                \"date\": \"2029-12-08 13:16:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-08 01:00:50.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-08 01:00:50.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"2 seconds ago\",\n            \"readable_updated_at\": \"2 seconds ago\"\n        },\n        \"view_event\": {\n            \"href\": \"v1/ngo/event/oj64bp5zjl8ywzn0\",\n            \"method\": \"GET\"\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"ngo\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "FCM",
    "name": "StoreUserFCMToken",
    "type": "POST",
    "url": "/v1/fcm/token/store",
    "title": "Store FCM token",
    "description": "<p>Store user's android/ios FCM token on the server</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "android",
              "ios"
            ],
            "optional": false,
            "field": "device_type",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"user_id\": \"3mjzyg5dp5a0vwp6\",\n    \"android_fcm_token\": \"123456\",\n    \"apns_id\": null\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/FCM/UI/API/Routes/StoreUserFCMToken.v1.private.php",
    "groupTitle": "FCM"
  },
  {
    "group": "Localization",
    "name": "getAllLocalizations",
    "type": "GET",
    "url": "/v1/localizations",
    "title": "Get all localizations",
    "description": "<p>Return all available localizations that are &quot;configured&quot; in the application</p>",
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
          "content": "HTTP/1.1 200 OK\n{\n  // TODO..\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Localization/UI/API/Routes/GetAllLocalizations.v1.private.php",
    "groupTitle": "Localization"
  },
  {
    "group": "Location",
    "name": "getAllLocations",
    "type": "GET",
    "url": "/v1/location",
    "title": "Lists All Locations",
    "description": "<p>Lists all locations (cities and province) in a convincing manner</p>",
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"province\": \"آذربایجان شرقی\",\n            \"cities\": [\n            \"اهر\",\n            \"هوراند\",\n            \"باسمنج\",\n            \"تبريز\",\n            \"سردرود\",\n            \"خسروشاه\",\n            \"سراب\",\n            .\n            .\n            .\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Location/UI/API/Routes/GetAllLocations.v1.private.php",
    "groupTitle": "Location"
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
            "description": "<p>(required)</p>"
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"NGO Updated\",\n        \"object\": {\n            \"object\": \"NGO\",\n            \"id\": \"kjeonp5eordqzvb8\",\n            \"name\": \"انجمن محلی جهانشهر حاجی آباد سابق\",\n            \"public_name\": \"9yrj4on3qmvdgrao\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": \"----\"\n            },\n            \"status\": \"ابطال شده\",\n            \"subject\": [\n                {\n                    \"id\": 1,\n                    \"subject\": \"علمی\"\n                },\n                {\n                    \"id\": 3,\n                    \"subject\": \"اجتماعی\"\n                }\n            ],\n            \"phone\": [\n                {\n                    \"id\": 1,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                },\n                    {\n                    \"id\": 2,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                }\n            ]\n            \"zip_code\": \"6316713649\",\n            \"type\": \"شركت تعاوني\",\n            \"verification_status\": \"requested\",\n            \"verification_admin_id\": \"3mjzyg5dp5a0vwp6\",\n            \"images\": {\n                \"ngo_logo\": \"http://api.samandoon.local/v1/storage/2/pepeWallpepeR.jpg\",\n                \"ngo_logo_thumb\": \"http://api.samandoon.local/v1/storage/2/conversions/thumb.jpg\",\n                \"ngo_banner\": \"http://api.samandoon.local/v1/storage/3/Sketch%20%281%29.png\",\n                \"ngo_banner_thumb\": \"http://api.samandoon.local/v1/storage/3/conversions/thumb.png\"\n            },\n            \"user_id\": \"3mjzyg5dp5a0vwp6\",\n            \"registration_specification\": {\n                \"national_number\": \"10100000010\",\n                \"registration_number\": \"13\",\n                \"registration_date\": \"1345/12/25\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-07 19:40:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-07 20:20:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"40 minutes ago\",\n            \"readable_updated_at\": \"1 second ago\",\n            \"view_ngo\": {\n                \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                \"method\": \"GET\"\n            },\n            \"stats\": {\n                \"is_following\": false,\n                \"followers_count\": 1,\n                \"article_count\": 6,\n                \"event_count\": 17\n            }\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"user\"\n        ],\n        \"custom\": []\n    }\n}",
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
          "content": "HTTP/1.1 204 No Content\n{\n\n}",
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"NGO Updated\",\n        \"object\": {\n            \"object\": \"NGO\",\n            \"id\": \"kjeonp5eordqzvb8\",\n            \"name\": \"انجمن محلی جهانشهر حاجی آباد سابق\",\n            \"public_name\": \"9yrj4on3qmvdgrao\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": \"----\"\n            },\n            \"status\": \"ابطال شده\",\n            \"subject\": [\n                {\n                    \"id\": 1,\n                    \"subject\": \"علمی\"\n                },\n                {\n                    \"id\": 3,\n                    \"subject\": \"اجتماعی\"\n                }\n            ],\n            \"phone\": [\n                {\n                    \"id\": 1,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                },\n                    {\n                    \"id\": 2,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                }\n            ]\n            \"zip_code\": \"6316713649\",\n            \"type\": \"شركت تعاوني\",\n            \"verification_status\": \"requested\",\n            \"verification_admin_id\": \"3mjzyg5dp5a0vwp6\",\n            \"images\": {\n                \"ngo_logo\": \"http://api.samandoon.local/v1/storage/2/pepeWallpepeR.jpg\",\n                \"ngo_logo_thumb\": \"http://api.samandoon.local/v1/storage/2/conversions/thumb.jpg\",\n                \"ngo_banner\": \"http://api.samandoon.local/v1/storage/3/Sketch%20%281%29.png\",\n                \"ngo_banner_thumb\": \"http://api.samandoon.local/v1/storage/3/conversions/thumb.png\"\n            },\n            \"user_id\": \"3mjzyg5dp5a0vwp6\",\n            \"registration_specification\": {\n                \"national_number\": \"10100000010\",\n                \"registration_number\": \"13\",\n                \"registration_date\": \"1345/12/25\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-07 19:40:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-07 20:20:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"40 minutes ago\",\n            \"readable_updated_at\": \"1 second ago\",\n            \"view_ngo\": {\n                \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                \"method\": \"GET\"\n            },\n            \"stats\": {\n                \"is_following\": false,\n                \"followers_count\": 1,\n                \"article_count\": 6,\n                \"event_count\": 17\n            }\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"user\"\n        ],\n        \"custom\": []\n    }\n}",
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
            "optional": true,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"شهرستان,استان,فرااستان,ملی,بین المللی\""
            ],
            "optional": true,
            "field": "area_of_activity",
            "description": "<p>max:255</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "public_name",
            "description": "<p>min:5 | max:30 | unique in db | regex:/^<a href=\"?:_?%5Ba-zA-Z0-9%5D+\">a-zA-Z</a>*$/</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "city",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "province",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "text",
            "optional": true,
            "field": "address",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "zip_code",
            "description": "<p>max:255</p>"
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": true,
            "field": "ngo_logo",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "image",
            "optional": true,
            "field": "ngo_banner",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "json",
            "optional": true,
            "field": "phone",
            "description": "<p>Example: [{&quot;label&quot; : &quot;خانه&quot;, &quot;phone_number&quot; : &quot;06153224740&quot;}, {&quot;label&quot; : &quot;دفتر&quot;, &quot;phone_number&quot; : &quot;06153224746&quot;}]</p>"
          },
          {
            "group": "Parameter",
            "type": "json",
            "optional": true,
            "field": "subject",
            "description": "<p>To delete all subjects send an empty array -&gt; []. To add or update subject send an array with subject ID's -&gt; [1,3]. This subjects will replace the current subjects of NGO. e.g. if current subjects are [1,2] and you send [1,3], new subjects will be [1,3].</p>"
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"NGO Updated\",\n        \"object\": {\n            \"object\": \"NGO\",\n            \"id\": \"kjeonp5eordqzvb8\",\n            \"name\": \"انجمن محلی جهانشهر حاجی آباد سابق\",\n            \"public_name\": \"9yrj4on3qmvdgrao\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": \"----\"\n            },\n            \"status\": \"ابطال شده\",\n            \"subject\": [\n                {\n                    \"id\": 1,\n                    \"subject\": \"علمی\"\n                },\n                {\n                    \"id\": 3,\n                    \"subject\": \"اجتماعی\"\n                }\n            ],\n            \"phone\": [\n                {\n                    \"id\": 1,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                },\n                    {\n                    \"id\": 2,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                }\n            ]\n            \"zip_code\": \"6316713649\",\n            \"type\": \"شركت تعاوني\",\n            \"verification_status\": \"requested\",\n            \"verification_admin_id\": \"3mjzyg5dp5a0vwp6\",\n            \"images\": {\n                \"ngo_logo\": \"http://api.samandoon.local/v1/storage/2/pepeWallpepeR.jpg\",\n                \"ngo_logo_thumb\": \"http://api.samandoon.local/v1/storage/2/conversions/thumb.jpg\",\n                \"ngo_banner\": \"http://api.samandoon.local/v1/storage/3/Sketch%20%281%29.png\",\n                \"ngo_banner_thumb\": \"http://api.samandoon.local/v1/storage/3/conversions/thumb.png\"\n            },\n            \"user_id\": \"3mjzyg5dp5a0vwp6\",\n            \"registration_specification\": {\n                \"national_number\": \"10100000010\",\n                \"registration_number\": \"13\",\n                \"registration_date\": \"1345/12/25\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-07 19:40:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-07 20:20:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"40 minutes ago\",\n            \"readable_updated_at\": \"1 second ago\",\n            \"view_ngo\": {\n                \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                \"method\": \"GET\"\n            },\n            \"stats\": {\n                \"is_following\": false,\n                \"followers_count\": 1,\n                \"article_count\": 6,\n                \"event_count\": 17\n            }\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"user\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "NGO",
    "name": "deletePhoneNumber",
    "type": "DELETE",
    "url": "/v1/ngo/resources/phone/{id}",
    "title": "Delete Phone Number",
    "description": "<p>Deletes the given phone number by id</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated | Owner"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 204 No Content\n{\n\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/NGO/UI/API/Routes/DeletePhoneNumber.v1.private.php",
    "groupTitle": "NGO"
  },
  {
    "group": "NGO",
    "name": "findNgoByNationalId",
    "type": "GET",
    "url": "/v1/ngo/find/{national_id}",
    "title": "Find NGO by National ID",
    "description": "<p>Search a NGO in National Registration website and return it's data if ngo is found</p>",
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
    "name": "findNgoByPublicName",
    "type": "GET",
    "url": "/v1/ngo/get/{public_name}",
    "title": "Find NGO by Public Name",
    "description": "<p>Search a NGO in local DB and return it's data if ngo is found</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "app/Containers/NGO/UI/API/Routes/FindNgoByPublicName.v1.private.php",
    "groupTitle": "NGO",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"NGO Updated\",\n        \"object\": {\n            \"object\": \"NGO\",\n            \"id\": \"kjeonp5eordqzvb8\",\n            \"name\": \"انجمن محلی جهانشهر حاجی آباد سابق\",\n            \"public_name\": \"9yrj4on3qmvdgrao\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": \"----\"\n            },\n            \"status\": \"ابطال شده\",\n            \"subject\": [\n                {\n                    \"id\": 1,\n                    \"subject\": \"علمی\"\n                },\n                {\n                    \"id\": 3,\n                    \"subject\": \"اجتماعی\"\n                }\n            ],\n            \"phone\": [\n                {\n                    \"id\": 1,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                },\n                    {\n                    \"id\": 2,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                }\n            ]\n            \"zip_code\": \"6316713649\",\n            \"type\": \"شركت تعاوني\",\n            \"verification_status\": \"requested\",\n            \"verification_admin_id\": \"3mjzyg5dp5a0vwp6\",\n            \"images\": {\n                \"ngo_logo\": \"http://api.samandoon.local/v1/storage/2/pepeWallpepeR.jpg\",\n                \"ngo_logo_thumb\": \"http://api.samandoon.local/v1/storage/2/conversions/thumb.jpg\",\n                \"ngo_banner\": \"http://api.samandoon.local/v1/storage/3/Sketch%20%281%29.png\",\n                \"ngo_banner_thumb\": \"http://api.samandoon.local/v1/storage/3/conversions/thumb.png\"\n            },\n            \"user_id\": \"3mjzyg5dp5a0vwp6\",\n            \"registration_specification\": {\n                \"national_number\": \"10100000010\",\n                \"registration_number\": \"13\",\n                \"registration_date\": \"1345/12/25\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-07 19:40:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-07 20:20:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"40 minutes ago\",\n            \"readable_updated_at\": \"1 second ago\",\n            \"view_ngo\": {\n                \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                \"method\": \"GET\"\n            },\n            \"stats\": {\n                \"is_following\": false,\n                \"followers_count\": 1,\n                \"article_count\": 6,\n                \"event_count\": 17\n            }\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"user\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "NGO",
    "name": "getKYCPhotos",
    "type": "GET",
    "url": "/v1/ngo/{ngo_id}/kyc/photo",
    "title": "KYC: Get All Photos",
    "description": "<p>Get all KYC photos for the given NGO. The &quot;status&quot; values are as follow: &quot;sent&quot; = photo has been saved to the server. &quot;verified&quot; = photo has been verified by admins. &quot;invalid&quot; = photo is checked by admins and has NOT been verified.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Owner| Admin"
      }
    ],
    "filename": "app/Containers/NGO/UI/API/Routes/GetKYCPhotos.v1.private.php",
    "groupTitle": "NGO",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"KYCPhoto\",\n        \"msg\": \"Media created\",\n        \"id\": \"kjeonp5eordqzvb8\",\n        \"file_name\": \"be6d4192b9e2e3a87a321a0eb52f49a9\",\n        \"image\": \"http://api.samandoon.local/v1/storage/1/be6d4192b9e2e3a87a321a0eb52f49a9.png\",\n        \"label\": \"national_card_side_two\",\n        \"status\": \"sent\",\n        \"text\": null,\n        \"ngo_id\": \"kjeonp5eordqzvb8\",\n        \"admin_id\": \"kjeonp5eordqzvb8\"\n    },\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "NGO",
    "name": "getNgoByPublicName",
    "type": "GET",
    "url": "/v1/ngo/name/{public_name}",
    "title": "Get NGO by Public Name",
    "description": "<p>Get the NGO by it's public name</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "app/Containers/NGO/UI/API/Routes/GetNgoByPublicName.v1.private.php",
    "groupTitle": "NGO",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"NGO Updated\",\n        \"object\": {\n            \"object\": \"NGO\",\n            \"id\": \"kjeonp5eordqzvb8\",\n            \"name\": \"انجمن محلی جهانشهر حاجی آباد سابق\",\n            \"public_name\": \"9yrj4on3qmvdgrao\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": \"----\"\n            },\n            \"status\": \"ابطال شده\",\n            \"subject\": [\n                {\n                    \"id\": 1,\n                    \"subject\": \"علمی\"\n                },\n                {\n                    \"id\": 3,\n                    \"subject\": \"اجتماعی\"\n                }\n            ],\n            \"phone\": [\n                {\n                    \"id\": 1,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                },\n                    {\n                    \"id\": 2,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                }\n            ]\n            \"zip_code\": \"6316713649\",\n            \"type\": \"شركت تعاوني\",\n            \"verification_status\": \"requested\",\n            \"verification_admin_id\": \"3mjzyg5dp5a0vwp6\",\n            \"images\": {\n                \"ngo_logo\": \"http://api.samandoon.local/v1/storage/2/pepeWallpepeR.jpg\",\n                \"ngo_logo_thumb\": \"http://api.samandoon.local/v1/storage/2/conversions/thumb.jpg\",\n                \"ngo_banner\": \"http://api.samandoon.local/v1/storage/3/Sketch%20%281%29.png\",\n                \"ngo_banner_thumb\": \"http://api.samandoon.local/v1/storage/3/conversions/thumb.png\"\n            },\n            \"user_id\": \"3mjzyg5dp5a0vwp6\",\n            \"registration_specification\": {\n                \"national_number\": \"10100000010\",\n                \"registration_number\": \"13\",\n                \"registration_date\": \"1345/12/25\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-07 19:40:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-07 20:20:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"40 minutes ago\",\n            \"readable_updated_at\": \"1 second ago\",\n            \"view_ngo\": {\n                \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                \"method\": \"GET\"\n            },\n            \"stats\": {\n                \"is_following\": false,\n                \"followers_count\": 1,\n                \"article_count\": 6,\n                \"event_count\": 17\n            }\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"user\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"msg\": \"Found Subject\",\n            \"object\": {\n                \"object\": \"Subject\",\n                \"id\": 1,\n                \"subject\": \"علمی\"\n            }\n        },\n        {\n            \"msg\": \"Found Subject\",\n            \"object\": {\n                \"object\": \"Subject\",\n                \"id\": 2,\n                \"subject\": \"فرهنگی\"\n            }\n        },\n        {\n            \"msg\": \"Found Subject\",\n            \"object\": {\n                \"object\": \"Subject\",\n                \"id\": 3,\n                \"subject\": \"اجتماعی\"\n            }\n        },\n    ],\n    \"meta\": {\n    \"include\": [],\n        \"custom\": [],\n        \"pagination\": {\n        \"total\": 4,\n            \"count\": 4,\n            \"per_page\": 1000,\n            \"current_page\": 1,\n            \"total_pages\": 1,\n            \"links\": []\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/NGO/UI/API/Routes/GetNgoSubjects.v1.private.php",
    "groupTitle": "NGO"
  },
  {
    "group": "NGO",
    "name": "kycVerifyRequest",
    "type": "PUT",
    "url": "/v1/ngo/kyc/verification/verify",
    "title": "KYC: Send verification request",
    "description": "<p>Send verification request</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"Photo verification request has been submitted\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/NGO/UI/API/Routes/KYCVerifyRequest.v1.private.php",
    "groupTitle": "NGO"
  },
  {
    "group": "NGO",
    "name": "listAllNGOs",
    "type": "GET",
    "url": "/v1/ngo",
    "title": "List all NGOs",
    "description": "<p>Lists all NGOs (if no query parameter is given)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "examples": [
      {
        "title": "Example usage:",
        "content": "api.samandoon.ngo/v1/ngo?filter=title;created_at&orderBy=title&sortedBy=asc",
        "type": "url"
      }
    ],
    "filename": "app/Containers/NGO/UI/API/Routes/ListAllNgos.v1.private.php",
    "groupTitle": "NGO",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"NGO Updated\",\n        \"object\": {\n            \"object\": \"NGO\",\n            \"id\": \"kjeonp5eordqzvb8\",\n            \"name\": \"انجمن محلی جهانشهر حاجی آباد سابق\",\n            \"public_name\": \"9yrj4on3qmvdgrao\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": \"----\"\n            },\n            \"status\": \"ابطال شده\",\n            \"subject\": [\n                {\n                    \"id\": 1,\n                    \"subject\": \"علمی\"\n                },\n                {\n                    \"id\": 3,\n                    \"subject\": \"اجتماعی\"\n                }\n            ],\n            \"phone\": [\n                {\n                    \"id\": 1,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                },\n                    {\n                    \"id\": 2,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                }\n            ]\n            \"zip_code\": \"6316713649\",\n            \"type\": \"شركت تعاوني\",\n            \"verification_status\": \"requested\",\n            \"verification_admin_id\": \"3mjzyg5dp5a0vwp6\",\n            \"images\": {\n                \"ngo_logo\": \"http://api.samandoon.local/v1/storage/2/pepeWallpepeR.jpg\",\n                \"ngo_logo_thumb\": \"http://api.samandoon.local/v1/storage/2/conversions/thumb.jpg\",\n                \"ngo_banner\": \"http://api.samandoon.local/v1/storage/3/Sketch%20%281%29.png\",\n                \"ngo_banner_thumb\": \"http://api.samandoon.local/v1/storage/3/conversions/thumb.png\"\n            },\n            \"user_id\": \"3mjzyg5dp5a0vwp6\",\n            \"registration_specification\": {\n                \"national_number\": \"10100000010\",\n                \"registration_number\": \"13\",\n                \"registration_date\": \"1345/12/25\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-07 19:40:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-07 20:20:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"40 minutes ago\",\n            \"readable_updated_at\": \"1 second ago\",\n            \"view_ngo\": {\n                \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                \"method\": \"GET\"\n            },\n            \"stats\": {\n                \"is_following\": false,\n                \"followers_count\": 1,\n                \"article_count\": 6,\n                \"event_count\": 17\n            }\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"user\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "NGO",
    "name": "requestNgoUpdate",
    "type": "PUT",
    "url": "/v1/ngo/update/{ngo_id}",
    "title": "Request Ngo Update",
    "description": "<p>Update NGO data from government server</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated | Owner"
      }
    ],
    "filename": "app/Containers/NGO/UI/API/Routes/RequestNgoUpdate.v1.private.php",
    "groupTitle": "NGO",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"NGO Updated\",\n        \"object\": {\n            \"object\": \"NGO\",\n            \"id\": \"kjeonp5eordqzvb8\",\n            \"name\": \"انجمن محلی جهانشهر حاجی آباد سابق\",\n            \"public_name\": \"9yrj4on3qmvdgrao\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": \"----\"\n            },\n            \"status\": \"ابطال شده\",\n            \"subject\": [\n                {\n                    \"id\": 1,\n                    \"subject\": \"علمی\"\n                },\n                {\n                    \"id\": 3,\n                    \"subject\": \"اجتماعی\"\n                }\n            ],\n            \"phone\": [\n                {\n                    \"id\": 1,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                },\n                    {\n                    \"id\": 2,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                }\n            ]\n            \"zip_code\": \"6316713649\",\n            \"type\": \"شركت تعاوني\",\n            \"verification_status\": \"requested\",\n            \"verification_admin_id\": \"3mjzyg5dp5a0vwp6\",\n            \"images\": {\n                \"ngo_logo\": \"http://api.samandoon.local/v1/storage/2/pepeWallpepeR.jpg\",\n                \"ngo_logo_thumb\": \"http://api.samandoon.local/v1/storage/2/conversions/thumb.jpg\",\n                \"ngo_banner\": \"http://api.samandoon.local/v1/storage/3/Sketch%20%281%29.png\",\n                \"ngo_banner_thumb\": \"http://api.samandoon.local/v1/storage/3/conversions/thumb.png\"\n            },\n            \"user_id\": \"3mjzyg5dp5a0vwp6\",\n            \"registration_specification\": {\n                \"national_number\": \"10100000010\",\n                \"registration_number\": \"13\",\n                \"registration_date\": \"1345/12/25\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-07 19:40:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-07 20:20:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"40 minutes ago\",\n            \"readable_updated_at\": \"1 second ago\",\n            \"view_ngo\": {\n                \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                \"method\": \"GET\"\n            },\n            \"stats\": {\n                \"is_following\": false,\n                \"followers_count\": 1,\n                \"article_count\": 6,\n                \"event_count\": 17\n            }\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"user\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "NGO",
    "name": "searchNgos",
    "type": "GET",
    "url": "/v1/search/ngo?q=",
    "title": "Search NGOs",
    "description": "<p>Search the value of q parameter in NGOs</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "examples": [
      {
        "title": "Example usage:",
        "content": "api.samandoon.ngo/v1/search/ngo?q=انجمن&area_of_activity=بین المللی&subjects=[5,2]&city=آبادان&province=خوزستان",
        "type": "url"
      }
    ],
    "filename": "app/Containers/NGO/UI/API/Routes/SearchNgos.v1.private.php",
    "groupTitle": "NGO",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"NGO Updated\",\n        \"object\": {\n            \"object\": \"NGO\",\n            \"id\": \"kjeonp5eordqzvb8\",\n            \"name\": \"انجمن محلی جهانشهر حاجی آباد سابق\",\n            \"public_name\": \"9yrj4on3qmvdgrao\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": \"----\"\n            },\n            \"status\": \"ابطال شده\",\n            \"subject\": [\n                {\n                    \"id\": 1,\n                    \"subject\": \"علمی\"\n                },\n                {\n                    \"id\": 3,\n                    \"subject\": \"اجتماعی\"\n                }\n            ],\n            \"phone\": [\n                {\n                    \"id\": 1,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                },\n                    {\n                    \"id\": 2,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                }\n            ]\n            \"zip_code\": \"6316713649\",\n            \"type\": \"شركت تعاوني\",\n            \"verification_status\": \"requested\",\n            \"verification_admin_id\": \"3mjzyg5dp5a0vwp6\",\n            \"images\": {\n                \"ngo_logo\": \"http://api.samandoon.local/v1/storage/2/pepeWallpepeR.jpg\",\n                \"ngo_logo_thumb\": \"http://api.samandoon.local/v1/storage/2/conversions/thumb.jpg\",\n                \"ngo_banner\": \"http://api.samandoon.local/v1/storage/3/Sketch%20%281%29.png\",\n                \"ngo_banner_thumb\": \"http://api.samandoon.local/v1/storage/3/conversions/thumb.png\"\n            },\n            \"user_id\": \"3mjzyg5dp5a0vwp6\",\n            \"registration_specification\": {\n                \"national_number\": \"10100000010\",\n                \"registration_number\": \"13\",\n                \"registration_date\": \"1345/12/25\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-07 19:40:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-07 20:20:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"40 minutes ago\",\n            \"readable_updated_at\": \"1 second ago\",\n            \"view_ngo\": {\n                \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                \"method\": \"GET\"\n            },\n            \"stats\": {\n                \"is_following\": false,\n                \"followers_count\": 1,\n                \"article_count\": 6,\n                \"event_count\": 17\n            }\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"user\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "NGO",
    "name": "sendKYCPhoto",
    "type": "POST",
    "url": "/v1/ngo/kyc/photo",
    "title": "KYC: Send Photo",
    "description": "<p>Send a KYC Photo to be added to the given NGO</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "image",
            "optional": false,
            "field": "image",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "string",
            "allowedValues": [
              "\"national_card_side_one\"",
              "\"national_card_side_two\"",
              "\"identity_paper\"",
              "\"ngo_registration_doc\""
            ],
            "optional": false,
            "field": "label",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"KYCPhoto\",\n            \"msg\": null,\n            \"id\": \"9knz73rynlpdx0vy\",\n            \"image\": \"http://api.samandoon.local/v1/storage/6/cd60429972b7dc9a281b44a3f2289abf.png\",\n            \"label\": \"identity_paper\",\n            \"status\": \"sent\",\n            \"text\": \"\",\n            \"ngo_id\": \"kjeonp5eordqzvb8\",\n            \"admin_id\": \"\",\n            \"created_at\": {\n            \"date\": \"2018-07-17 19:03:54.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-07-17 19:03:54.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"1 second ago\",\n            \"readable_updated_at\": \"1 second ago\"\n        },\n        {\n            \"object\": \"KYCPhoto\",\n            \"msg\": null,\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"image\": \"http://api.samandoon.local/v1/storage/5/29194079960e2607c39e35b191f1abbe.png\",\n            \"label\": \"national_card_side_one\",\n            \"status\": \"sent\",\n            \"text\": \"\",\n            \"ngo_id\": \"kjeonp5eordqzvb8\",\n            \"admin_id\": \"\",\n            \"created_at\": {\n            \"date\": \"2018-07-17 19:03:20.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-07-17 19:03:20.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"34 seconds ago\",\n            \"readable_updated_at\": \"34 seconds ago\"\n        },\n        {\n            \"object\": \"KYCPhoto\",\n            \"msg\": null,\n            \"id\": \"oj64bp5zjl8ywzn0\",\n            \"image\": \"http://api.samandoon.local/v1/storage/1/6efc42e741522db49a0de6eaa01b7f13.png\",\n            \"label\": \"national_card_side_two\",\n            \"status\": \"sent\",\n            \"text\": \"\",\n            \"ngo_id\": \"kjeonp5eordqzvb8\",\n            \"admin_id\": \"\",\n            \"created_at\": {\n            \"date\": \"2018-07-17 19:03:13.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-07-17 19:03:13.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"41 seconds ago\",\n            \"readable_updated_at\": \"41 seconds ago\"\n        }\n    ],\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/NGO/UI/API/Routes/SendKYCPhoto.v1.private.php",
    "groupTitle": "NGO"
  },
  {
    "group": "NotificationCenter",
    "name": "getNotifications",
    "type": "GET",
    "url": "/v1/user/{id}/notifications",
    "title": "Get user notifications",
    "description": "<p>Get user notifications</p>",
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
    "filename": "app/Containers/NotificationCenter/UI/API/Routes/GetNotifications.v1.private.php",
    "groupTitle": "NotificationCenter"
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
    "type": "DELETE",
    "url": "/v1/logout",
    "title": "Logout",
    "description": "<p>User Logout. (Revoking Access Token)</p>",
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
            "allowedValues": [
              "\"android\"",
              "\"ios\""
            ],
            "optional": false,
            "field": "device_type",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "fcm_token",
            "description": ""
          }
        ]
      }
    },
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"images\": {\n                \"avatar\": \"http://api.samandoon.local/v1/storage/5/pepeWallpepeR.jpg\",\n                \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/5/conversions/thumb.jpg\"\n            },\n            \"confirmed\": false,\n            \"is_admin\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"images\": {\n                \"avatar\": \"http://api.samandoon.local/v1/storage/5/pepeWallpepeR.jpg\",\n                \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/5/conversions/thumb.jpg\"\n            },\n            \"confirmed\": false,\n            \"is_admin\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"images\": {\n                \"avatar\": \"http://api.samandoon.local/v1/storage/5/pepeWallpepeR.jpg\",\n                \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/5/conversions/thumb.jpg\"\n            },\n            \"confirmed\": false,\n            \"is_admin\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
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
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"current_android_version_code\": 500,\n    \"current_android_version_name\": \"25.21.2.657\",\n    \"current_ios_version\": 500,\n    \"in_maintance_mode_message\": \"برنامه نویسان مشغول کارند!\",\n    \"is_in_maintance_mode\": true,\n    \"is_login_allowed\": true,\n    \"is_new_article_allowed\": true,\n    \"is_new_event_allowed\": true,\n    \"is_ngo_creation_allowed\": true,\n    \"is_payment_allowed\": true,\n    \"is_registration_allowed\": true,\n    \"least_android_version_code\": 1000,\n    \"least_android_version_name\": \"12.2.14.221\",\n    \"least_ios_version\": 1000,\n    \"update_android_url\": \"www.google.com\",\n    \"update_ios_url\": \"www.google.com\"\n}",
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
    "name": "deleteFile",
    "type": "DELETE",
    "url": "/v1/storage/{folder_name}/{resource_name}",
    "title": "Delete File",
    "description": "<p>Endpoint description here..</p>",
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
          "content": "HTTP/1.1 200 OK\n{\n    \"Media (50762ff31f0d03520cd26dbb54d37443.jpg) deleted.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Storage/UI/API/Routes/DeleteFile.v1.private.php",
    "groupTitle": "Storage"
  },
  {
    "group": "Storage",
    "name": "downloadFile",
    "type": "GET",
    "url": "/v1/storage/{folder_name}/{resource_name}",
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
    "group": "Storage",
    "name": "downloadPDF",
    "type": "GET",
    "url": "/v1/timeline/pdf",
    "title": "Generate Timeline PDF",
    "description": "<p>Generate Timeline PDF and return as file to download</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "app/Containers/Storage/UI/API/Routes/DownloadPDF.v1.private.php",
    "groupTitle": "Storage"
  },
  {
    "group": "Storage",
    "name": "downloadThumbImage",
    "type": "GET",
    "url": "/v1/storage/{id}/conversions/{resource_name}",
    "title": "Download Thumb Image",
    "description": "<p>Returns a Thumb Image from server's public folder</p>",
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
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Storage/UI/API/Routes/DownloadThumbImage.v1.private.php",
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"images\": {\n                \"avatar\": \"http://api.samandoon.local/v1/storage/5/pepeWallpepeR.jpg\",\n                \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/5/conversions/thumb.jpg\"\n            },\n            \"confirmed\": false,\n            \"is_admin\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"images\": {\n                \"avatar\": \"http://api.samandoon.local/v1/storage/5/pepeWallpepeR.jpg\",\n                \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/5/conversions/thumb.jpg\"\n            },\n            \"confirmed\": false,\n            \"is_admin\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"images\": {\n                \"avatar\": \"http://api.samandoon.local/v1/storage/5/pepeWallpepeR.jpg\",\n                \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/5/conversions/thumb.jpg\"\n            },\n            \"confirmed\": false,\n            \"is_admin\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"images\": {\n                \"avatar\": \"http://api.samandoon.local/v1/storage/5/pepeWallpepeR.jpg\",\n                \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/5/conversions/thumb.jpg\"\n            },\n            \"confirmed\": false,\n            \"is_admin\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "User",
    "name": "forgotPassword",
    "type": "POST",
    "url": "/v1/password/forgot",
    "title": "Forgot password",
    "description": "<p>Forgot password endpoint.</p>",
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
            "field": "reseturl",
            "description": "<p>the reset password url</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/ForgotPassword.v1.public.php",
    "groupTitle": "User"
  },
  {
    "group": "User",
    "name": "getLikes",
    "type": "GET",
    "url": "/v1/user/{user_id}/likes",
    "title": "Get Likes",
    "description": "<p>Get what the user has liked ( IT's USELESS IMO )</p>",
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
            "allowedValues": [
              "\"article\""
            ],
            "optional": false,
            "field": "type",
            "description": ""
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
    "filename": "app/Containers/User/UI/API/Routes/GetLikes.v1.private.php",
    "groupTitle": "User"
  },
  {
    "group": "User",
    "name": "getSubscribers",
    "type": "GET",
    "url": "/v1/user/subscribers/get",
    "title": "Get Subscribers",
    "description": "<p>Get the User's NGO subscribers</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetSubscribers.v1.private.php",
    "groupTitle": "User",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"images\": {\n                \"avatar\": \"http://api.samandoon.local/v1/storage/5/pepeWallpepeR.jpg\",\n                \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/5/conversions/thumb.jpg\"\n            },\n            \"confirmed\": false,\n            \"is_admin\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "User",
    "name": "getSubscriptions",
    "type": "GET",
    "url": "/v1/user/subscriptions/get",
    "title": "Get Subscriptions",
    "description": "<p>Get user subscriptions</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetSubscriptions.v1.private.php",
    "groupTitle": "User",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": \"NGO Updated\",\n        \"object\": {\n            \"object\": \"NGO\",\n            \"id\": \"kjeonp5eordqzvb8\",\n            \"name\": \"انجمن محلی جهانشهر حاجی آباد سابق\",\n            \"public_name\": \"9yrj4on3qmvdgrao\",\n            \"description\": null,\n            \"subjects\": [],\n            \"area_of_activity\": null,\n            \"location\": {\n                \"city\": \"آبادان\",\n                \"province\": \"خوزستان\",\n                \"address\": \"----\"\n            },\n            \"status\": \"ابطال شده\",\n            \"subject\": [\n                {\n                    \"id\": 1,\n                    \"subject\": \"علمی\"\n                },\n                {\n                    \"id\": 3,\n                    \"subject\": \"اجتماعی\"\n                }\n            ],\n            \"phone\": [\n                {\n                    \"id\": 1,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                },\n                    {\n                    \"id\": 2,\n                    \"label\": \"testLabel\",\n                    \"phone_number\": \"06153224745\"\n                }\n            ]\n            \"zip_code\": \"6316713649\",\n            \"type\": \"شركت تعاوني\",\n            \"verification_status\": \"requested\",\n            \"verification_admin_id\": \"3mjzyg5dp5a0vwp6\",\n            \"images\": {\n                \"ngo_logo\": \"http://api.samandoon.local/v1/storage/2/pepeWallpepeR.jpg\",\n                \"ngo_logo_thumb\": \"http://api.samandoon.local/v1/storage/2/conversions/thumb.jpg\",\n                \"ngo_banner\": \"http://api.samandoon.local/v1/storage/3/Sketch%20%281%29.png\",\n                \"ngo_banner_thumb\": \"http://api.samandoon.local/v1/storage/3/conversions/thumb.png\"\n            },\n            \"user_id\": \"3mjzyg5dp5a0vwp6\",\n            \"registration_specification\": {\n                \"national_number\": \"10100000010\",\n                \"registration_number\": \"13\",\n                \"registration_date\": \"1345/12/25\",\n                \"registration_unit\": \"مرجع ثبت شركت ها و موسسات غيرتجاري شهريار\"\n            },\n            \"created_at\": {\n                \"date\": \"2018-04-07 19:40:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n                \"date\": \"2018-04-07 20:20:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"40 minutes ago\",\n            \"readable_updated_at\": \"1 second ago\",\n            \"view_ngo\": {\n                \"href\": \"v1/ngo/kjeonp5eordqzvb8\",\n                \"method\": \"GET\"\n            },\n            \"stats\": {\n                \"is_following\": false,\n                \"followers_count\": 1,\n                \"article_count\": 6,\n                \"event_count\": 17\n            }\n        }\n    },\n    \"meta\": {\n        \"include\": [\n            \"user\"\n        ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "User",
    "name": "getUserFeed",
    "type": "GET",
    "url": "/v1/user/feed/get",
    "title": "Get User's Feed",
    "description": "<p>Return the user's activity feed</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"msg\": null,\n            \"object\": {\n            \"object\": \"Article\",\n                \"id\": \"9knz73rynlpdx0vy\",\n                \"text\": \"Article Text 2\",\n                \"article_image\": null,\n                \"ngo_id\": \"3mjzyg5dp5a0vwp6\",\n                \"created_at\": {\n                \"date\": \"2018-02-26 05:42:54.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"updated_at\": {\n                \"date\": \"2018-02-26 05:42:54.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"readable_created_at\": \"3 days ago\",\n                \"readable_updated_at\": \"3 days ago\",\n                \"like_count\": 0,\n                \"liked_by_current_user\": false,\n                \"view_article\": {\n                \"href\": \"v1/ngo/article/9knz73rynlpdx0vy\",\n                    \"method\": \"GET\"\n                }\n            }\n        },\n        {\n            \"msg\": null,\n            \"object\": {\n            \"object\": \"Article\",\n                \"id\": \"qv4jdwrw0lanm6xg\",\n                \"text\": \"Article Text 1\",\n                \"article_image\": null,\n                \"ngo_id\": \"3mjzyg5dp5a0vwp6\",\n                \"created_at\": {\n                \"date\": \"2018-02-26 05:42:47.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"updated_at\": {\n                \"date\": \"2018-02-26 05:42:47.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"readable_created_at\": \"3 days ago\",\n                \"readable_updated_at\": \"3 days ago\",\n                \"like_count\": 0,\n                \"liked_by_current_user\": false,\n                \"view_article\": {\n                \"href\": \"v1/ngo/article/qv4jdwrw0lanm6xg\",\n                    \"method\": \"GET\"\n                }\n            }\n        }\n    ],\n    \"meta\": {\n    \"include\": [\n        \"ngo\",\n        \"user\"\n    ],\n        \"custom\": [],\n        \"pagination\": {\n        \"total\": 5,\n            \"count\": 5,\n            \"per_page\": 15,\n            \"current_page\": 1,\n            \"total_pages\": 1,\n            \"links\": []\n        }\n    }\n}\n/*\n/** @var Route $router",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/GetUserFeed.v1.private.php",
    "groupTitle": "User"
  },
  {
    "group": "User",
    "name": "like",
    "type": "POST",
    "url": "/v1/user/like",
    "title": "Like",
    "description": "<p>Like the specified target</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>id of the target to be liked</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"article\""
            ],
            "optional": false,
            "field": "type",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"msg\": \"User (3mjzyg5dp5a0vwp6) liked Article (kjeonp5eordqzvb8).\",\n    \"like_count\": 1, //this is the current like count of the liked target e.g. Article\n    \"is_liked\": true\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/Like.v1.private.php",
    "groupTitle": "User"
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
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"msg\": 'Some informative msg here or null',\n        \"object\": {\n        \"object\": \"User\",\n            \"id\": \"qv4jdwrw0lanm6xg\",\n            \"first_name\": \"Mohammad\",\n            \"last_name\": \"Alavi\",\n            \"email\": \"m.alavi1989@gmail.com\",\n            \"images\": {\n                \"avatar\": \"http://api.samandoon.local/v1/storage/5/pepeWallpepeR.jpg\",\n                \"avatar_thumb\": \"http://api.samandoon.local/v1/storage/5/conversions/thumb.jpg\"\n            },\n            \"confirmed\": false,\n            \"is_admin\": false,\n            \"gender\": null,\n            \"birth\": null,\n            \"province\": null,\n            \"city\": null,\n            \"ngo_id\": \"ndvm9yrj4rao0jkq\",\n            \"social_provider\": null,\n            \"social_nickname\": null,\n            \"social_id\": null,\n            \"social_avatar\": {\n            \"avatar\": null,\n                \"original\": null\n            },\n            \"created_at\": {\n            \"date\": \"2017-11-27 03:08:59.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-11-27 03:42:29.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"readable_created_at\": \"35 minutes ago\",\n            \"readable_updated_at\": \"2 minutes ago\"\n        },\n        \"view_user\": {\n        \"href\": \"v1/user/qv4jdwrw0lanm6xg\",\n            \"method\": \"GET\"\n        },\n        \"roles\": {\n        \"data\": [\n                {\n                    \"object\": \"Role\",\n                    \"id\": \"3mjzyg5dp5a0vwp6\",\n                    \"name\": \"user\",\n                    \"description\": \"User\",\n                    \"display_name\": null,\n                    \"permissions\": {\n                    \"data\": [\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"qv4jdwrw0lanm6xg\",\n                                \"name\": \"manage-ngo\",\n                                \"description\": \"Create, Update, Delete, List NGOs\",\n                                \"display_name\": \"Manage NGO\"\n                            },\n                            {\n                                \"object\": \"Permission\",\n                                \"id\": \"9knz73rynlpdx0vy\",\n                                \"name\": \"manage-event\",\n                                \"description\": \"Create, Update, Delete, List Events\",\n                                \"display_name\": \"Manage Event\"\n                            }\n                        ]\n                    }\n                }\n            ]\n        }\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "User",
    "name": "resetPassword",
    "type": "GET/POST",
    "url": "/v1/password/reset",
    "title": "Reset Password",
    "description": "<p>Resets a password for an user.</p>",
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
            "field": "token",
            "description": "<p>from the forgot password email</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>the new password</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 204 OK\n{}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/ResetPassword.v1.public.php",
    "groupTitle": "User"
  },
  {
    "group": "User",
    "name": "subscribe",
    "type": "POST",
    "url": "/v1/user/subscribe/{id}",
    "title": "Subscribe",
    "description": "<p>Subscribe to the given resource</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"followers_count\": 1,\n    \"is_following\": true\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/Subscribe.v1.private.php",
    "groupTitle": "User"
  },
  {
    "group": "User",
    "name": "toggleLike",
    "type": "POST",
    "url": "/v1/user/togglelike",
    "title": "Toggle Like",
    "description": "<p>Toggle Like on the specified resource</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>id of the target to be liked</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"article\""
            ],
            "optional": false,
            "field": "type",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"msg\": \"User (3mjzyg5dp5a0vwp6) liked Article (kjeonp5eordqzvb8).\",\n    \"like_count\": 1, //this is the current like count of the liked target e.g. Article\n    \"is_liked\": true\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/ToggleLike.v1.private.php",
    "groupTitle": "User"
  },
  {
    "group": "User",
    "name": "unlike",
    "type": "POST",
    "url": "/v1/user/unlike",
    "title": "Unlike",
    "description": "<p>Unlike the specified target</p>",
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
            "field": "id",
            "description": "<p>id of the target to be unliked</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"article\""
            ],
            "optional": false,
            "field": "type",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"msg\": \"User (qv4jdwrw0lanm6xg) unliked Article (kjeonp5eordqzvb8).\",\n    \"like_count\": 0, //this is the current like count of the liked target e.g. Article\n    \"is_liked\": false\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/Unlike.v1.private.php",
    "groupTitle": "User"
  },
  {
    "group": "User",
    "name": "unsubscribe",
    "type": "POST",
    "url": "/v1/user/unsubscribe/{id}",
    "title": "Unsubscribe",
    "description": "<p>Unsubscribe from the given id</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"followers_count\": 0,\n    \"is_following\": false\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/Unsubscribe.v1.private.php",
    "groupTitle": "User"
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
