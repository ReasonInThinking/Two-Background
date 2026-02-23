<style>
    body {
        margin: 0;
        padding: 0;
        display: flex;
        height: 100vh;
        font-size: 70px;
    }

    .dark,
    .white {
        padding: 0 20px;
        flex-basis: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .dark {
        align-items: flex-end;
        background-color: #000;
        color: #fff;
    }

    .white {
        align-items: flex-start;
        background-color: #fff;
        color: #000;
    }

    @media (max-width: 700px) {
        body {
            font-size: 40px;
        }
    }
</style>

<div class="dark">New</div>
<div class="white">Project</div>