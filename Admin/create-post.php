

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lemon Hive || Admin</title>

    <link rel="stylesheet" href="CSS/adminstyle.css">

    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-adc42f0f5cea7225671ba01ef8acb0ac.css?vsn=d">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/fontawesome.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/whiteboard-semibold.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/thumbprint-light.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/slab-press-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/slab-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/sharp-duotone-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/sharp-duotone-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/sharp-duotone-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/sharp-duotone-light.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/sharp-light.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/notdog-duo-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/notdog-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/jelly-fill-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/jelly-duo-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/jelly-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/etch-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/duotone-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/duotone.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/duotone-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/duotone-light.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/light.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/brands.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.0/css/chisel-regular.css">
</head>

<body>
    <div class="adminnav">
        <div class="adminlogo">
            <img src="../Images/lh.jpeg">
        </div>
    </div>

    <div class="bodyPart">
        <div class="sidebar">
            <ul>
                <li><i class="fa-solid fa-layer-group"></i><a href="#">Dashboard</a></li>
                <li><i class="fa-solid fa-file-circle-plus"></i><a href="#">Post Add</a></li>
                <li><i class="fa-solid fa-file-pen"></i><a href="#">Post Update</a></li>
                <li><i class="fa-solid fa-file-xmark"></i><a href="#">Post Delete</a></li>
                <li><i class="fa-solid fa-gear-complex"></i><a href="#">Settings</a></li>
                <li><i class="fa-solid fa-right-from-bracket"></i><a href="#">Log out</a></li>
            </ul>
        </div>

        <div class="createpost">

            <h1>Create Blog</h1>

            <form>
                <label>Blog Post Title</label><br>
                <input type="text" id="blogTitle" name="blogTitle" placeholder="Enter Blog post title"><br>
                <label>Type of Blog</label><br>
                <select>
                    <option>Travel Blog</option>
                    <option>IT Blog</option>
                    <option>Business Blog</option>
                    <option>Life-style Blog</option>
                </select><br>
                <label>Blog Writer Name</label><br>
                <input type="text" id="wname" name="wname" placeholder="Enter Blog Writer name"><br>
                <label>Blog Description</label><br>
                <textarea id="desc" name="message" rows="20" cols="50"></textarea><br>
                <label>Blog Photo </label><small class="note">(Max file size: 2MB & Allowed types: JPG, PNG)</small><br>
                <input type="file" id="fileUpload" name="fileUpload" accept=".jpg,.png,.pdf"><br>

                <button type="submit">Submit</button>

                <p></p>

            </form>

        </div>

    </div>
    
</body>
</html>