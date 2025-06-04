document.addEventListener('DOMContentLoaded', () => {
    initNavigation();
    initSearch();
});

// ==========================================
// Navegação
// ==========================================
const initNavigation = () => {
    const navList = document.querySelector('.nav__list');
    const fixedContainer = document.querySelector('.nav__fixed');
    const fixedSelectedItem = fixedContainer.querySelector('.nav__item');
    const rightAlignStartIndex = 4;

    if (!navList || !fixedSelectedItem) return;

    const updateSelectedItem = (clickedItem) => {
        navList.querySelectorAll('.nav__item').forEach(item => {
            item.classList.remove('selected');
        });
        
        clickedItem.classList.add('selected');
        fixedSelectedItem.textContent = clickedItem.textContent;

        const itemIndex = Array.from(navList.querySelectorAll('.nav__item')).indexOf(clickedItem);
        const shouldAlignRight = itemIndex >= rightAlignStartIndex;
        fixedContainer.style.left = shouldAlignRight ? 'auto' : '0';
        fixedContainer.style.right = shouldAlignRight ? '0' : 'auto';
        
        checkVisibility();
    };

    const checkVisibility = () => {
        const selectedItemInList = navList.querySelector('.nav__item.selected');
        if (!selectedItemInList) return;

        const navListRect = navList.getBoundingClientRect();
        const selectedItemRect = selectedItemInList.getBoundingClientRect();
        
        const isVisible = selectedItemRect.left >= navListRect.left && 
                        selectedItemRect.right <= navListRect.right;
        
        fixedContainer.classList.toggle('visible', !isVisible);
    };

    const setupEventListeners = () => {
        navList.querySelectorAll('.nav__item').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                updateSelectedItem(item);
            });
        });

        navList.addEventListener('scroll', checkVisibility);
        window.addEventListener('resize', checkVisibility);
    };

    setupEventListeners();
    checkVisibility();
};

// ==========================================
// Pesquisa
// ==========================================
const initSearch = () => {
    const searchButton = document.querySelector('.search__button');
    const searchOverlay = document.querySelector('.search__overlay');
    const searchClose = document.querySelector('.search__close');
    const searchInput = document.querySelector('.search__input');
    const searchSubmit = document.querySelector('.search__submit');
    const searchActionButton = document.querySelector('.search__action-button');

    if (!searchButton || !searchOverlay || !searchClose || !searchInput || !searchSubmit || !searchActionButton) return;

    const openSearch = () => {
        searchOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
        setTimeout(() => searchInput.focus(), 300);
    };

    const closeSearch = () => {
        searchOverlay.classList.remove('active');
        document.body.style.overflow = '';
        searchInput.value = '';
        searchInput.blur();
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        if (searchInput.value.trim()) {
            console.log('Pesquisando:', searchInput.value.trim());
            closeSearch();
        }
    };

    const setupEventListeners = () => {
        searchButton.addEventListener('click', openSearch);
        searchClose.addEventListener('click', closeSearch);
        searchSubmit.addEventListener('click', handleSubmit);
        searchActionButton.addEventListener('click', handleSubmit);
        searchInput.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeSearch();
            } else if (e.key === 'Enter') {
                handleSubmit(e);
            }
        });
        searchOverlay.addEventListener('click', (e) => {
            if (e.target === searchOverlay) {
                closeSearch();
            }
        });
    };

    setupEventListeners();
};
