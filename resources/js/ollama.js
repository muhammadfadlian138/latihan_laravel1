async function askAI() {
    const prompt = document.getElementById("prompt").value;

    const response = await fetch(
        "ask?prompt=" + encodeURIComponent(prompt)
    );

    const data = await response.json();

    document.getElementById("result").textContent =
        data.response;
}

window.askAI = askAI;