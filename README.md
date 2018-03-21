#### Features: 
* Easy to use.
* Quick Setup.
* Frontend Sortings with different parameters.
* Pagination available(if required.)
* Drag & Drop for reordering collections.
* Responsive design.
* Include Bootstrap in page.(support of different versions)

#### Usage
In **OctoberCMS**, This plugin can be used to put collapsible content on your web pages where you will get the flexibility to display your results.


#### **How to install:**
To install this plugin you have to type **ChiragPatel.BootstrapCollapse** in Backend System Settings > Updates & Plugins > Install plugins.

#### **How to use:**
In backend, Click on ‘Bootstrap Collapse’ where you can manage your details.

To include Bootstrap collapse on your page:
1. Click on CMS in Backend.
2.  Select page you want to include this plugin.
3.  Click Components and select **Bootstrap Collapse** and drag it to the desired position or simple Click on **Bootstrap Collapse** and write `{% component ‘bootstrapCollapse’ %}`  where you want to place Bootstrap Collapse.

#### **Configuration:**
In your layout file, you have to write `{% placeholder collapse %}` in the body section. 
> **Important note**: This will help to close other collapses while opening another. If you want open multiple collapses at a time then ignore this.

This plugin has different properties as per below:
*  **Add Bootstrap Property**

    * If you haven't added Bootstrap Package in your layout file. Then you must select Bootstrap(**Add Bootstrap**) from dropdown in component properties.
    
    * Here You get different Bootstrap version support (Bootstrap 3 & Bootstrap 4). Choose suitable version for your web applications.


*  **Sort By Property**

    * You can sort your items on frontend by **Title** and **Date modified** with desirable **Sort By** property.

    * And if you want to do custom sorting you can do by selecting Sort Order.
    
    * You can customize your order by following steps:
    
       1. On Bootstrap Collapse in the backend, you have option **Reset Orders**. 
       2. And by clicking it, you will have the list of all data, there you can **drag and reorder** as per your choice.


* **Pagination Property**

    * If you want to show limited numbers of data per page you have to select **Pagination**.
    
    * After selecting pagination, In **Per Page** property, you can write numbers of data per page (default: 15).

> **Note:** For Using this plugin, you must have to include Bootstrap in your Layout.
If not you can select different versions of Bootstrap so it will direct include bootstrap in the page.