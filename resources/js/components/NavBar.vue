<template>
    <nav>
        <ul>
            <li><a href="\">Home</a></li>
            <li><a href="page1">Page 1</a></li>
            <li><a href="page2">Page 2</a></li>
            <li><a href="page3">Page 3</a></li>
            <li><a href="page4">Page 4</a></li>
            <li><a href="page5">Page 5</a></li>
            <li><a href="page6">Page 6</a></li>
        </ul>
    </nav>
</template>

<style>
    /* Removes gap from navigation bar on the page. */
    body {
        margin: 0px;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #111;
    }
</style>
