import { computed, type ComputedRef } from 'vue';
import { usePage } from '@inertiajs/vue3';

type Messages = Record<string, unknown>;

// `t()` on this site returns strings only. The service pages also keep lists
// (cards, FAQ, facts) in the translation files, so this reads any value by path.
export function useContent<T>(path: string, fallback: T): ComputedRef<T> {
    const page = usePage<{ translations?: { messages?: Messages } }>();

    return computed(() => {
        let node: unknown = page.props.translations?.messages;

        for (const key of path.split('.')) {
            if (node === null || typeof node !== 'object') {
                return fallback;
            }
            node = (node as Messages)[key];
        }

        return (node ?? fallback) as T;
    });
}

export interface TitledItem {
    title: string;
    text: string;
}

export interface Fact {
    title: string;
    description: string;
}

export interface FaqItem {
    question: string;
    answer: string;
}
