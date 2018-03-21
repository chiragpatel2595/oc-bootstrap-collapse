**How to install:**

To install this plugin you have to type **ChiragPatel.BootstrapCollapse** in Backend System Settings > Updates & Plugins > Install plugins.

**How to use:**

In backend, Click on ‘Bootstrap Collapse’ where you can manage your details.

To include Bootstrap collapse in your page.
1) Click on CMS in Backend.
2) Select page you want to include this plugin.
3) Click Components and select Bootstrap Collapse and drag it to desired position or simple Click on Bootstrap Collapse and write `{% component ‘bootstrapCollapse’ %}` where you want to place Bootstrap Collapse.

**Configuration:**

In your layout file you have to write `{% placeholder collapse %}` in body section. 

This plugin has different properties as per below:

*  **Add Bootstrap Property**

    -> If you haven't added Bootstrap Package in your layout file. Then you must select Bootstrap(**Add Bootstrap**) from dropdown in component properties.
    
    -> Here You get different Bootstrap version support (Bootstrap 3 & Bootstrap 4). Choose suitable version for your web applications.


*  **Sort By Property**

    -> You can sort your items on frontend by 'Title' and 'Date modified' with desirable 'Sort By' property.

    -> And if you want to do custom sorting you can do by selecting Sort Order.
    
    ->You can customize your order by following below steps:
    
    * On Bootsrap Collapse in backend, you have option **Reset Orders**. 
    * And by clicking it, you will have list of all data, there you can drag and reorder as per your choice.


* **Pagination Property**

    -> If you want to show limited numbers of data per page you have to select **Pagination**.
    
    -> After selecting pagination, In **Per Page** property, you can write numbers of data per page (default: 15).

**Notes:** 

* For Using this plugin, you must have to include Bootstrap theme in your Layout.
If not you can select different versions of Bootstrap so it will direct include bootstrap  in page.
