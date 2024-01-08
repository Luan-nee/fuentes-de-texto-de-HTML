<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
    $fuente = array(
        "Courier New",
        "Franklin Gothic Medium",
        "Gill Sans",
        "Lucida Sans",
        "Segoe UI",
        "Times New Roman",
        "Trebuchet MS",
        "Arial",
        "Cambria",
        "Georgia",
        "Impact",
        "Verdana",
        "cursive",
        "fantasy",
        "monospace",
        "sans-serif",
        "serif",
        "system-ui"
    );
for ($i=0; $i < 10; $i++) { ?>
<section style="font-family: <?php echo $fuente[$i]; ?>">
    <h1>FUENTE --> <?php echo $fuente[$i]; ?></h1>
    <h1>h1 --> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum perspiciatis sint omnis ipsam cumque velit nobis at sunt officiis sapiente.</h1>
    <h2>h2 --> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem reiciendis dolor commodi expedita. Commodi, voluptas repellendus ea minus earum consectetur.</h2>
    <h3>h3 --> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, minus laboriosam. Impedit error, et ex quidem quod corporis voluptas officia.</h3>
    <h4>h4 --> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dolore voluptatem tenetur dignissimos magnam nobis doloremque iste optio fuga enim.</h4>
    <h5>h5 --> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis voluptates deserunt rem repellendus, reprehenderit corporis commodi tempore voluptas veniam nihil?</h5>
    <h6>h6 --> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores dicta asperiores est corrupti doloremque dolorem eum quibusdam. Laborum, recusandae vero! </h6>
    <p>parrafo --> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores dignissimos, cupiditate nihil culpa dolores molestias, voluptas nisi, vero officia et tempora? Ipsum, a delectus, perspiciatis dicta aut voluptatum aspernatur at officiis sapiente voluptas consequatur ab, minima voluptate earum excepturi alias in fugiat unde autem quaerat? Corporis cumque cum reiciendis odit.</p>
    <hr>
</section>

    <?php } ?>

</body>
</html>