</div>
    </main>
    
    <style>
        .select-hidden { display: none !important; }
        .custom-select-wrapper { position: relative; width: 100%; user-select: none; }
        .custom-select-trigger {
            background: #000; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 9999px;
            color: #e7e5e4; padding: 14px 24px; cursor: pointer; display: flex; justify-content: space-between; align-items: center;
            transition: all 0.3s ease; font-size: 14px;
        }
        .custom-select-trigger:hover, .custom-select-trigger.active { border-color: #c59a6c; box-shadow: 0 0 15px rgba(197, 154, 108, 0.3); }
        
        /* PANEL DROPDOWN */
        .custom-select-panel {
            position: absolute; top: calc(100% + 8px); left: 0; right: 0; z-index: 9999;
            background: #0a0807 !important; border: 1px solid #c59a6c; border-radius: 16px;
            box-shadow: 0 20px 50px rgba(0,0,0,1); max-height: 250px; overflow-y: auto; overflow-x: hidden;
            opacity: 0; visibility: hidden; transform: translateY(-10px); transition: all 0.3s ease;
            
            /* Fix Scrollbar untuk Firefox */
            scrollbar-width: thin;
            scrollbar-color: #c59a6c #0a0807;
        }
        .custom-select-panel.open { opacity: 1; visibility: visible; transform: translateY(0); }
        
        /* Fix Scrollbar Mewah untuk Chrome, Edge, Safari */
        .custom-select-panel::-webkit-scrollbar { width: 12px; }
        .custom-select-panel::-webkit-scrollbar-track { 
            background: #0a0807; 
            border-radius: 0 16px 16px 0; 
            border-left: 1px solid rgba(255,255,255,0.05);
        }
        .custom-select-panel::-webkit-scrollbar-thumb { 
            background-color: #c59a6c; 
            border-radius: 10px; 
            border: 3px solid #0a0807; /* Memberikan efek padding/mengambang */
        }
        .custom-select-panel::-webkit-scrollbar-thumb:hover { background-color: #d4af37; }

        .custom-select-option { padding: 12px 24px; color: #a8a29e; cursor: pointer; border-bottom: 1px solid rgba(255,255,255,0.05); }
        .custom-select-option:hover { background: #1a1614; color: #c59a6c; }
        .custom-select-option.selected { color: #d4af37; font-weight: bold; background: #1a1614; }
    </style>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("select").forEach(select => {
                select.classList.add("select-hidden");
                const wrapper = document.createElement("div");
                wrapper.className = "custom-select-wrapper";
                select.parentNode.insertBefore(wrapper, select);
                wrapper.appendChild(select);

                const trigger = document.createElement("div");
                trigger.className = "custom-select-trigger";
                trigger.innerHTML = `<span>${select.options[select.selectedIndex].text}</span> <svg class="w-4 h-4 text-[#c59a6c]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>`;
                wrapper.appendChild(trigger);

                const panel = document.createElement("div");
                panel.className = "custom-select-panel";
                Array.from(select.options).forEach((option, index) => {
                    const item = document.createElement("div");
                    item.className = "custom-select-option" + (select.selectedIndex === index ? " selected" : "");
                    item.innerHTML = option.text;
                    item.onclick = (e) => {
                        e.stopPropagation();
                        select.selectedIndex = index;
                        trigger.querySelector("span").innerHTML = option.text;
                        panel.classList.remove("open");
                        trigger.classList.remove("active");
                        const glassParent = wrapper.closest('.glass-panel');
                        if(glassParent) glassParent.style.zIndex = "10";
                        select.dispatchEvent(new Event("change"));
                    };
                    panel.appendChild(item);
                });
                wrapper.appendChild(panel);

                trigger.onclick = (e) => {
                    e.stopPropagation();
                    const isOpen = panel.classList.contains("open");
                    document.querySelectorAll(".custom-select-panel").forEach(p => p.classList.remove("open"));
                    document.querySelectorAll(".glass-panel").forEach(gp => gp.style.zIndex = "10");

                    if (!isOpen) {
                        panel.classList.add("open");
                        trigger.classList.add("active");
                        const glassParent = wrapper.closest('.glass-panel');
                        if(glassParent) glassParent.style.zIndex = "9999";
                    }
                };
            });
            document.onclick = () => {
                document.querySelectorAll(".custom-select-panel").forEach(p => p.classList.remove("open"));
                document.querySelectorAll(".glass-panel").forEach(gp => gp.style.zIndex = "10");
            };
        });
    </script>
</body></html>