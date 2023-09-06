import streamlit as st

# Find more emojis here: https://www.webfx.com/tools/emoji-cheat-sheet/
st.set_page_config(page_title="PetMana", page_icon=":skull:")

lottie_coding = "https://lottie.host/09aebf8e-5c27-4a78-8e15-a92fa0553c25/8JT7Yin9KX.lottie"

# === HEADER SECTION ===
st.subheader("HI I AM KX :wave:")
st.title("Our hackathon app")
st.write("This is our tree wellness tracker")

# ---What i do---
with st.container():
    st.write("---")
    left_column, right_column = st.columns(2)
    with left_column:
        st.header("what i do")