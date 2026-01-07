export interface ApiResponse<TData> {
    data: TData;
    meta: ApiMeta;
    links: ApiLink;
}

interface ApiMeta {
    currentPage: number;
    from: number;
    lastPage: number;
    links: ApiMetaLink[];
    path: string;
    perPage: number;
    to: number;
    total: number;
}

interface ApiMetaLink {
    url: string|null;
    label: string;
    active: boolean;
    page: number|null;
}

interface ApiLink {
    first: string;
    last: string;
    next: string|null;
    prev: string|null;
}
