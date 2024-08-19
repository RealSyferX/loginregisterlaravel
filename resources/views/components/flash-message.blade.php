
<style>
   

    .message-box {
        top: 10%;
        position: absolute;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        width: 300px;
        padding: 20px;
        margin-left: 40%;
        display: block;
        z-index: 99;
    }

    .message-box h2 {
        color: #333;
        margin-bottom: 10px;
    }

    .message-box p {
        color: #555;
        margin-bottom: 20px;
    }

    .close-button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }

    .close-button:hover {
        background-color: #0056b3;
    }
</style>

@if(session()->has('message'))
<div class="message-box">
    <h2>Alert message</h2>
    <p>{{ session("message") }}</p>
    <button class="close-button" onclick="closeMessageBox()">Close</button>
</div>
@endif

<script>
    function closeMessageBox() {
        document.querySelector(".message-box").style.display = "none";
    }
</script>