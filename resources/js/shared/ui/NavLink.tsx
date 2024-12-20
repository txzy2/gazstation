import {Link} from '@inertiajs/react';
import React from 'react';

interface Props {
  active?: boolean;
  className?: string;
  children: React.ReactNode;
  [props: string]: any;
}

const NavLink: React.FC<Props> = ({
  active = false,
  className = '',
  children,
  ...props
}) => {
  return (
    <Link
      href={''}
      {...props}
      className={
        'inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none ' +
        (active
          ? 'border-indigo-400 text-gray-900 focus:border-indigo-700'
          : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 focus:border-gray-300 focus:text-gray-700') +
        className
      }
    >
      {children}
    </Link>
  );
};

export default NavLink;
