import AOS from 'aos';
export default function asoAnimations() {
    setTimeout(() => {
        AOS.init({
          duration: 250,
          easing: 'ease-out-sine',
          once: true,
        });
    }, 1000);
}