<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Access - Luxury Choco EIS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config={theme:{extend:{colors:{luxury:{latte:'#c59a6c'}},animation:{'float':'float 8s ease-in-out infinite'},keyframes:{float:{'0%, 100%':{transform:'translateY(0) scale(1)'},'50%':{transform:'translateY(-20px) scale(1.05)'}}}}}};</script>
    <style>
        body { background-color: #0a0807; }
        .glass-auth { background: rgba(255,255,255,0.02); backdrop-filter: blur(30px); border: 1px solid rgba(255,255,255,0.08); border-radius: 40px; box-shadow: 0 20px 50px rgba(0,0,0,0.5); }
        .glass-input { background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.1); border-radius: 9999px; color: white; padding: 16px 24px; transition: all 0.3s; }
        .glass-input:focus { outline: none; border-color: #c59a6c; box-shadow: 0 0 20px rgba(197,154,108,0.2); background: rgba(0,0,0,0.5); }
    </style>
</head>
<body class="flex items-center justify-center h-screen overflow-hidden relative">
    <div class="absolute w-[500px] h-[500px] bg-luxury-latte/10 rounded-full blur-[150px] animate-float"></div>
    
    <div class="glass-auth p-12 w-[450px] relative z-10 animate-[fadeInUp_1s_ease-out]">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-luxury-latte to-[#d4af37] tracking-wider mb-2">CHOCO<span class="text-white font-light">EIS</span></h1>
            <p class="text-[#8c6b4a] text-xs tracking-[0.3em] uppercase">Authorized Personnel Only</p>
        </div>
        <form action="<?= BASEURL; ?>/login" method="POST" class="flex flex-col gap-6">
            <div>
                <input type="text" name="username" placeholder="Executive ID" class="w-full glass-input" required value="admin">
            </div>
            <div>
                <input type="password" name="password" placeholder="Access Key" class="w-full glass-input" required value="admin123">
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-luxury-latte to-[#a87f54] text-black font-bold py-4 rounded-full mt-4 hover:shadow-[0_0_30px_rgba(197,154,108,0.4)] hover:scale-[1.02] transition-all duration-300 tracking-wider uppercase text-sm">Authenticate</button>
        </form>
    </div>
</body>
</html>