declare global {
    interface Window {
        acf?: {
            addAction(action: string, callback: (el: HTMLElement) => void): void;
        }
    }
}

export {};