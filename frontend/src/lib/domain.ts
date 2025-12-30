export const isCentralDomain = (): boolean => {
    const host = window.location.hostname;
    return host === 'restoflow.lvh.me';
}
